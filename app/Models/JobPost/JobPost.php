<?php

namespace App\Models\JobPost;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'j_title',
        'location',
        'vacation',
        'e_status',
        'experience',
        'e_requirement',
        'salary',
        'description',
        'age',
        'p_date',
        'd_date',
        'status',
    ];

}
