<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Response;

class UpdateUserBalance extends Component
{
    public $user;
    public $from;
    public $typeOfTransaction;
    public $value;
    public $message = '';
    public $status = '';

    protected $rules = [
        'from' => 'required|in:deposit,bonus,totalProfitEarned,wallet_balance,token',
        'typeOfTransaction' => 'required|in:credit,debit',
        'value' => 'required|numeric|min:0',
    ];

    public function mount($user)
    {
        $this->user = $user;
    }

    public function updateBalance()
    {
        $this->validate();

        $user = User::find($this->user->id);
        $from = $this->from;
        $value = floatval($this->value);

        if ($this->typeOfTransaction == 'credit') {
            if ($from == 'deposit') {
                $user->wallet_balance = $value + floatval(preg_replace("/[^0-9.]/", "", $user->wallet_balance));
            }
            $user->$from = floatval(preg_replace("/[^0-9.]/", "", $user->$from)) + $value;
        } elseif ($this->typeOfTransaction == 'debit') {
            $currentValue = floatval(preg_replace("/[^0-9.]/", "", $user->$from));
            if ($currentValue < $value) {
                $this->status = 'danger';
                $this->message = 'Insufficient funds in select balance.';
                return;
            } else {
                if ($from == 'deposit') {
                    $user->wallet_balance = floatval(preg_replace("/[^0-9.]/", "", $user->wallet_balance)) - $value;
                }
                $user->$from = $currentValue - $value;
            }
        }

        // Update user's profile.
        if (isset($user->packages->duration)) {
            $user->investmentDuration = $user->packages->duration;
        }
        $user->save();

        $this->status = 'success';
        $this->message = "You have successfully updated {$user->name}'s " . ucfirst($from) . " Balance.";
        
        $this->reset(['from', 'typeOfTransaction', 'value']);
        $this->user = $user; // Refresh user data

        // Emit event to refresh other components if needed
        $this->emit('userUpdated');
    }

    public function render()
    {
        return view('livewire.admin.update-user-balance');
    }
}
