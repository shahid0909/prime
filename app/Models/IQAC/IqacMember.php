<?php

namespace App\Models\IQAC;

use App\Models\Employ\Employ;
use App\Models\FacultyMember\FacultyMember;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IqacMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'employ_id',
        'faculty_member_id',
        'administrator_type',
        'iqac_designation',
        'ext',
        'dept_id',
        'status',
        'parity'
        ];

      public function employ()
    {
        return $this->belongsTo(Employ::class,'employ_id', 'id')->with('designation');
    }

    public function faculty_member()
    {
        return $this->belongsTo(FacultyMember::class,'faculty_member_id', 'id')->with('designation');
    }



}
