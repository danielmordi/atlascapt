<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCopyTrader extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'copy_trader_id',
        'copy_trader_status',
        'status',
        'amount',
        'date_followed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
