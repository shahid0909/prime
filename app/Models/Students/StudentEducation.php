<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'exam_name',
        'institute',
        'major_area',
        'passing_year',
        'grade',
        'upload_file',
    ];

}
