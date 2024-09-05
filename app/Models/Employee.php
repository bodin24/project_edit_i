<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'full_name',
        'email',
        'number',
        'description',
        'address',
        'city',
        'country',
        'postal_code',
        'status'
    ];
}
