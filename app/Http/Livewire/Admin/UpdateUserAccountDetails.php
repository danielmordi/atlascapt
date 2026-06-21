<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coin;
use App\Models\Token;
use App\Models\Deposit;
use App\Models\Package;
use Livewire\Component;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Hash;

class UpdateUserAccountDetails extends Component
{
    public $showEditForm = false;
    public $user;
    public $packages;
    public $package;
    public $amt_invested;
    public $amt_withdrawn;
    public $portfolio_value;
    public $bonus;
    public $get_package;

    protected $listeners = ['userUpdated' => 'refreshUser'];

    public function refreshUser()
    {
        $this->user = \App\Models\User::find($this->user->id);
        $this->mount($this->user, $this->packages);
    }

    public function mount($user, $packages)
    {
        $this->user = $user;
        $this->packages = $packages;
        $this->package = $this->user->package;
        $this->get_package = Package::where('id', $this->package)->first();
        $this->amt_invested = $this->user->deposit ?? 0;
        $this->amt_withdrawn = $this->user->withdrawal->amount ?? 0;
        $this->portfolio_value = $this->user->totalProfitEarned ?? 0;
        $this->bonus = $this->user->bonus ?? 0;
    }

    public function toggleEditForm()
    {
        $this->showEditForm = !$this->showEditForm;
    }

    public function updateUserAccount() {
        $userId = $this->user->id;

        // Get the first in Coin
        $coin = Coin::first();
        $coinId = $coin->id;

        // Update user deposit balance
        $this->user->deposit = $this->amt_invested;
        $this->user->save();

        // Update or create user withdrawn total amout
        Withdrawal::updateOrCreate([
            'user_id' => $userId
        ], [
            'amount' => $this->amt_withdrawn,
            'coin_id' => $coinId,
            'withdraw_from' => 'totalProfitEarned',
            'wallet_id' => Hash::make('$value'),
            'status' => 'complete',
        ]);
            

        // Update user portfolio value
        $this->user->totalProfitEarned = $this->portfolio_value;
        $this->user->package = $this->package;
        $this->user->bonus = $this->bonus;
        $this->user->save();

        // Send alert
        session()->flash('message', 'User account details updated successfully.');
        $this->showEditForm = false;
    }
    
    public function render()
    {
        return view('livewire.admin.update-user-account-details');
    }
}
