<?php

namespace App\Models\Notice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptNotice extends Model
{
    use HasFactory;

    protected $fillable = ['title','date','dept_id','file','description','status'];
}
