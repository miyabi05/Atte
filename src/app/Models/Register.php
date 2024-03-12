<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $attributes = [
        'password_confirmation' => 1,
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'password_confirmation'
    ];
    }
