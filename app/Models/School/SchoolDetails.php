<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolDetails extends Model
{
    use HasFactory;

    protected $fillable = ['school_id','title','duration_course','duration_class','time',
        'weekly_class','course_status','course_fee','status',];

}
