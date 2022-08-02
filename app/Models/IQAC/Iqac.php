<?php

namespace App\Models\IQAC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iqac extends Model
{
    use HasFactory;
    protected $fillable = ['w_title','w_details','dept_id','status'];

}
