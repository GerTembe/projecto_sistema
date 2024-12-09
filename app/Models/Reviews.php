<?php

namespace App\Models;

use App\Models\Monographs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable=[
        			
        'monographs_id',
        'review_date',
        'file',
        'comment'
    ];
    public function Monographs()
    {
        return $this->belongsTo(Monographs::class);
    }
}
