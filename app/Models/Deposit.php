<?php

namespace App\Models;

use NumberFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coin_id',
        'package_id',
        'copy_trader_id',
        'amount',
        'status'
    ];

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function copyTrader()
    {
        return $this->belongsTo(CopyTrader::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
