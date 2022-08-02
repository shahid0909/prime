<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptEvents extends Model
{
    use HasFactory;

    protected $fillable = ['title','image','date','place','description','dept_id','status'];
}
