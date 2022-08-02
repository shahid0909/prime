<?php

namespace App\Models\Employ;

use App\Models\Administrator\Administrator;
use App\Models\FacultyMember\Designation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    use HasFactory;
    protected $fillable = ['e_name','e_designation','email','image','about','number','administrators_id','status','parity'];


       public function designation()
    {
        return $this->belongsTo(Designation::class,'e_designation', 'id');
    }
    public function administrators()
    {
        return $this->belongsTo(Administrator::class,'administrators_id', 'id');
    }

}
