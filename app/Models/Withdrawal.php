<?php

namespace App\Models;

use NumberFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'wallet_id', 'coin_id', 'withdraw_from', 'user_id', 'status',
        'withdrawal_code', 'transfer_code', 'withdrawal_code_verified', 'transfer_code_verified'
    ];

    protected $casts = [
        'withdrawal_code_verified' => 'boolean',
        'transfer_code_verified'   => 'boolean',
    ];

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
