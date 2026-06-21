<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hash_rate',
        'percentenage',
        'min_val',
        'max_val',
        'duration',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
