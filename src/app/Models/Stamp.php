<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    use HasFactory;
    protected $fillable = [
        'register_id',
        'start',
        'end',
        'break',
        'break_end'
    ];
}
