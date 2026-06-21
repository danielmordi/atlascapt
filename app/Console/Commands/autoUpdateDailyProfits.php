<?php

namespace App\Console\Commands;

use App\Models\User;
use NumberFormatter;
use App\Models\UserPlan;
use Illuminate\Console\Command;
use App\Models\TransactionHistory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\DailyReturnsNotification;

class autoUpdateDailyProfits extends Command
{
    use Notifiable;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateprofits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto update and add to user wallet balance with profit daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $activePlans = UserPlan::where('status', 'active')->with(['user', 'package'])->get();
        
        $plansByUser = $activePlans->groupBy('user_id');

        $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

        foreach ($plansByUser as $userId => $userPlans) {
            $user = $userPlans->first()->user;
            if (!$user) continue;

            $totalUserProfitThisRun = 0;

            foreach ($userPlans as $plan) {
                $package = $plan->package;

                if (!$package) {
                    continue;
                }

                // If investmentDuration = profitCount, stop adding
                // profit to user account daily.
                if ($plan->investmentDuration !== null && $plan->profitCount >= $plan->investmentDuration) {
                    $plan->status = 'completed';
                    $plan->save();
                    continue;
                }

                $packagePercentage = $package->percentage;
                $profit = (floatval($packagePercentage) / 100) * $plan->amount;

                // Update Plan
                $plan->profitCount += 1;
                $plan->totalProfitEarned += $profit;
                $plan->save();

                $totalUserProfitThisRun += $profit;

                // Create transaction history for each plan
                $trans = TransactionHistory::create([
                    'user_id' => $user->id,
                    'user_plan_id' => $plan->id,
                    'type' => 'ROI',
                    'description' => "Daily profit of \${$profit} was added to your wallet for plan #{$plan->id}!",
                    'amount' => $profit,
                    'status' => 'completed'
                ]);

                // Format amount for notification (legacy behavior)
                $trans->amount = $fmt->formatCurrency(floatval($trans->amount), 'USD');
                // Notification::send($user, new DailyReturnsNotification($trans, $user));
            }

            if ($totalUserProfitThisRun > 0) {
                // Update User once
                $user->totalProfitEarned = $user->userPlans()->sum('totalProfitEarned');
                $user->wallet_balance = floatval(preg_replace("/[^0-9.]/", "", $user->wallet_balance)) + $totalUserProfitThisRun;
                $user->save();
            }
        }

        $this->info("Update was successful!");
    }
}
