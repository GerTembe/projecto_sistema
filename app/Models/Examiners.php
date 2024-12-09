<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examiners extends Model
{
    use HasFactory;
    protected $fillable=[

        'name',
        'contact',
        'role',
        'email',
        'password'
    ];
}
