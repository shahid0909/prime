<?php

namespace App\Models\NotableAlumni;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeNotableAlumni extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','designation','description','status'];

}
