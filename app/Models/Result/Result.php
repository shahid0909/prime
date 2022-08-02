<?php

namespace App\Models\Result;

use App\Models\Settings\StartSession;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'e_semester',
        'f_semester',
        'cgpa',
        'p_date',
        'status',
    ];
    public function startsession()
    {
        return $this->belongsTo(StartSession::class,'e_semester', 'id');
    }
}
