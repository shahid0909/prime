<?php

namespace App\Models\Exam;

use App\Models\Settings\StartSession;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamInfo extends Model
{
    use HasFactory;

    protected $fillable = ['exam_name',
        'exam_session_id',
        'date_of_exam'
    ];

    public function start_session()
    {
        return $this->belongsTo(StartSession::class,'exam_session_id', 'id');
    }

}
