<?php

namespace App\Models\ClassExam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassExam extends Model
{
    use HasFactory;

    protected $fillable = ['title','file','date','type','dept_id','status'];
}
