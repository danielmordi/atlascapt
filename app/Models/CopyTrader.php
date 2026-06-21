<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyTrader extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'avatar',
        'location',
        'mininum_capital',
        'risk_level',
        'equity_growth',
        'avg_per_month',
        'total_pips',
        'description',
        'rating',
    ];

    public function userCopyTrader()
    {
        return $this->hasMany(UserCopyTrader::class);
    }
}
