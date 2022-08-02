<?php

namespace App\Models\NewsMedia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptNewsMedia extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','date','description','dept_id','status'];

}
