<?php

namespace App\Http\Controllers;

use App\Http\Requests\CopyTraderRequest;
use App\Models\CopyTrader;
use App\Models\UserCopyTrader;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CopyTraderController extends Controller
{
    public function index()
    {
        try {
            \Illuminate\Support\Facades\Artisan::call('migrate');
        } catch (\Exception $e) {
            // Ignore if already run
        }

        return view('user.copy-trader', [
            'copyTraders' => CopyTrader::all()
        ]);
    }

    public function follow(Request $request)
    {
        try {
            $userId = trim(htmlspecialchars($request->input('user')));
            $copyTrader = trim(htmlspecialchars($request->input('copy_trader')));
            $trader = CopyTrader::findOrFail($copyTrader);

            // Check if user is already following this trader
            $checkIfTraderHasBeenFollowed = UserCopyTrader::where('user_id', $userId)
                ->where('copy_trader_id', $copyTrader)->first();

            // Check if already following this copy trader
            $existingFollow = UserCopyTrader::where('user_id', $userId)
                ->where('copy_trader_id', $copyTrader)
                ->where('status', 'followed')
                ->first();

            if ($existingFollow) {
                $refundAmount = floatval($existingFollow->amount ?? 0);
                
                \DB::beginTransaction();
                try {
                    $existingFollow->update([
                        'status' => 'unfollowed',
                        'copy_trader_status' => 'inactive'
                    ]);

                    if ($refundAmount > 0) {
                        $user = \App\Models\User::findOrFail($userId);
                        $user->deposit = floatval(preg_replace("/[^0-9.]/", "", $user->deposit)) + $refundAmount;
                        $user->save();

                        \App\Models\TransactionHistory::create([
                            'user_id' => $userId,
                            'type' => 'Refund',
                            'description' => "Refunded copy trading investment of \${$refundAmount} from unfollowing {$trader->username}",
                            'amount' => $refundAmount,
                            'status' => 'completed',
                        ]);
                    }
                    
                    \DB::commit();
                } catch (\Exception $e) {
                    \DB::rollBack();
                    throw $e;
                }

                // Get trader's username for the message
                $username = $trader ? $trader->username : 'this trader';

                return redirect()->back()->with('success', "You've successfully un-followed {$username}.");
            }

            // Validate investment amount
            $request->validate([
                'amount' => 'required|numeric|min:' . $trader->mininum_capital,
            ]);

            $investAmount = floatval($request->input('amount'));
            $user = \App\Models\User::findOrFail($userId);
            $depositBalance = floatval(preg_replace("/[^0-9.]/", "", $user->deposit));

            // Check if user has enough deposit
            if ($depositBalance < $investAmount) {
                return redirect()->back()->with('error', 'Insufficient funds. Click on "Deposit" to fund your account.');
            }

            \DB::beginTransaction();
            try {
                // Deduct from deposit
                $user->deposit = $depositBalance - $investAmount;
                $user->save();

                // Create or update follow record
                if ($checkIfTraderHasBeenFollowed) {
                    $checkIfTraderHasBeenFollowed->update([
                        'status' => 'followed',
                        'copy_trader_status' => 'active',
                        'amount' => $investAmount,
                        'date_followed' => now()
                    ]);
                } else {
                    UserCopyTrader::create([
                        'user_id' => $userId,
                        'copy_trader_id' => $copyTrader,
                        'copy_trader_status' => 'active',
                        'status' => 'followed',
                        'amount' => $investAmount,
                        'date_followed' => now()
                    ]);
                }

                // Create transaction history
                \App\Models\TransactionHistory::create([
                    'user_id' => $userId,
                    'type' => 'Copy Trade Investment',
                    'description' => "Invested \${$investAmount} to follow {$trader->username}",
                    'amount' => $investAmount,
                    'status' => 'completed',
                ]);

                \DB::commit();
            } catch (\Exception $e) {
                \DB::rollBack();
                throw $e;
            }

            // Get trader's username for the message
            $username = $trader ? $trader->username : 'this trader';

            return redirect()->back()->with('success', "You've successfully followed {$username}.");
        } catch (ValidationException $ve) {
            return redirect()->back()->withErrors($ve->validator)->withInput();
        } catch (\Exception $e) {
            logger()->error('Error in follow method: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()->with('error', 'An error occurred while trying to follow this trader. Please try again later.');
        }
    }

    public function manageCopyTraders()
    {
        return view('admin.manage-copy-traders');
    }

    public function createCopytrader()
    {
        return view('admin.copy-traders', [
            'method' => 'post',
            'url' => route('admin.add.copy-traders')
        ]);
    }

    public function editCopyTrader($id)
    {
        $data = CopyTrader::find($id);
        return view('admin.copy-traders', [
            'data' => $data,
            'method' => 'patch',
            'url' => route('admin.update.copy-traders', $data->id)
        ]);
    }

    public function addCopyTrader(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required|string|max:255',
            'mininum_capital' => 'required|numeric',
            'risk_level' => 'required|string',
            'equity_growth' => 'required|numeric',
            'avg_per_month' => 'required|numeric',
            'total_pips' => 'required|integer',
            'description' => 'required|string',
            'rating' => 'required|numeric|between:1,5',
        ]);

        try {
            $data = $request->all();

            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $path = $avatar->store('copytrader/avatar', 'public');
                $data['avatar'] = $path;
            }

            CopyTrader::create($data);

            return redirect()->route('admin.manage.copy-traders')
                ->with('success', 'CopyTrader added successfully');
        } catch (\Throwable $th) {
            \Log::error('Error adding copytrader: ' . $th->getMessage());
            return back()->with('error', 'An error occurred while adding the copytrader')
                ->withInput();
        }
    }

    public function updateCopyTrader(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required|string|max:255',
            'mininum_capital' => 'required|numeric',
            'risk_level' => 'required|string',
            'equity_growth' => 'required|numeric',
            'avg_per_month' => 'required|numeric',
            'total_pips' => 'required|integer',
            'description' => 'required|string',
            'rating' => 'required|numeric|between:1,5',
        ]);

        try {
            $copyTrader = CopyTrader::findOrFail($id);
            $data = $request->all();

            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $path = $avatar->store('copytrader/avatar', 'public');

                // Delete old avatar if it exists
                if ($copyTrader->avatar && \Storage::disk('public')->exists($copyTrader->avatar)) {
                    \Storage::disk('public')->delete($copyTrader->avatar);
                }

                $data['avatar'] = $path;
            }

            $copyTrader->update($data);

            return redirect()->route('admin.manage.copy-traders')
                ->with('success', 'CopyTrader updated successfully');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return back()->with('error', 'CopyTrader not found');
        } catch (\Throwable $th) {
            \Log::error('Error updating copytrader: ' . $th->getMessage());
            return back()->with('error', 'An error occurred while updating the copytrader')
                ->withInput();
        }
    }
}
