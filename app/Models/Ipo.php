<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'symbol',
        'description',
        'image',
        'price',
        'quantity',
        'available_quantity',
        'min_purchase',
        'max_purchase',
        'status',
    ];

    public function userIpos()
    {
        return $this->hasMany(UserIpo::class);
    }
}
