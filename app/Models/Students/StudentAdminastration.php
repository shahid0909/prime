<?php

namespace App\Models\Students;

use App\Models\AcaProgram\AcaProgram;
use App\Models\Settings\Department;
use App\Models\Settings\StartSession;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAdminastration extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'faculty_id',
        'dept_id',
        'program_id',
        'session_id',
        'shift',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class,'dept_id', 'id');
    }

    public function program()
    {
        return $this->belongsTo(AcaProgram::class,'program_id', 'id');
    }



}
