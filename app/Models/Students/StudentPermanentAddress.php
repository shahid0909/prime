<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPermanentAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'country',
        'district',
        'thana',
        'police_station',
        'post_code',
        'address',
    ];
}
