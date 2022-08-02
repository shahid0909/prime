<?php

namespace App\Models\Students;

use App\Models\Settings\Batch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        's_id',
        'batch',
        's_name',
        'f_name',
        'd_iss',
        'd_exp',
        'm_name',
        'b_date',
        'gender',
        'nationality',
        'enroll_date',
        'phone',
        'email',
        'freedom_fighter',
        'poor',
        'f_semester',
        'status',
    ];

    public function batches()
    {
        return $this->belongsTo(Batch::class,'batch', 'id');
    }
    public function Student_program()
    {
        return $this->belongsTo(StudentAdminastration::class,'id', 'student_id')->with('program');
    }

}
