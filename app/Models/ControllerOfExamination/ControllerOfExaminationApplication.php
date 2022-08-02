<?php

namespace App\Models\ControllerOfExamination;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControllerOfExaminationApplication extends Model
{
    use HasFactory;

    protected $fillable = ['a_title','uplode_file','status'];
}
