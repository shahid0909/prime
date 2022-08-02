<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club_Committee extends Model
{
    use HasFactory;
    protected $fillable = ['designation','name','batch','club_id','status'];

}
