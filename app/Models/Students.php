<?php

namespace App\Models;

use App\Models\Curses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable=[
        'curses_id',
        'name',
        'email',
        'password',
        'contact',
        'password',
        'conclusion_date',
    ];
    public function Curses()
    {
        return $this->belongsTo(Curses::class);
    }

}
