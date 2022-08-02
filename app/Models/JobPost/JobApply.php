<?php

namespace App\Models\JobPost;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'date',
        'upload_file',
        'image',
        'job_id',
    ];

}
