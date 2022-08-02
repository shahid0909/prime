<?php

namespace App\Models\Massage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MassageDeptHad extends Model
{
    use HasFactory;

    protected $fillable = ['dept_id','faculty_member_id','short_massage','long_massage','status'];

}
