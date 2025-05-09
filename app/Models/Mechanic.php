<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    /** @use HasFactory<\Database\Factories\MechanicFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'user_id',
    ];
}
