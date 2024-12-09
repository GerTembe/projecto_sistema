<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defenses extends Model
{
    use HasFactory;						
    protected $fillable=[
        			
        'monographs_id',
        'examiners_id',
        'place',
        'rating	',
        'defense_date',
        'status'
    ];
    public function Monographs()
    {
        return $this->belongsTo(Monographs::class);
    }
    public function Examiners()
    {
        return $this->belongsTo(Examiners::class);
    }
}
