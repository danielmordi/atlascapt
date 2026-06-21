<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'wallet_id',
    ];

    public function deposit()
    {
        return $this->hasMany(Coin::class);
    }

    public function withdrawal()
    {
        return $this->hasMany(Coin::class);
    }
}
