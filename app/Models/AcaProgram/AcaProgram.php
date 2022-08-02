<?php

namespace App\Models\AcaProgram;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaProgram extends Model
{
    use HasFactory;

    protected $fillable = ['p_name','credits','m_year','m_course','cgpa','p_objective','p_outcome','c_structure','c_distribution','dept_id','status'];

}
