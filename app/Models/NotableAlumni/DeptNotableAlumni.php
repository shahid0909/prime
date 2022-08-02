<?php

namespace App\Models\NotableAlumni;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptNotableAlumni extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','designation','description','dept_id','status'];
}
