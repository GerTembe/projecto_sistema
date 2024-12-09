<?php

namespace App\Models;

use App\Models\Advisors;
use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monographs extends Model
{
    use HasFactory;

    protected $table = 'monographs';

    protected $fillable=[									

        'advisors_id',
        'students_id',
        'title',
        'submission_date',
        'file',
        'note',
    ];
    public function Students()
    {
        return $this->belongsTo(Students::class);
    }
    public function Advisors()
    {
        return $this->belongsTo(Advisors::class);
    }
}
