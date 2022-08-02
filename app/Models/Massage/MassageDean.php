<?php

namespace App\Models\Massage;

use App\Models\Employ\Employ;
use App\Models\FacultyMember\FacultyMember;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MassageDean extends Model
{
    use HasFactory;
    protected $fillable = ['faculty_id','e_id','short_massage','long_massage','status'];



    public function  employee(){
      return  $this->belongsTo(FacultyMember::class,'e_id','id');
    }
}
