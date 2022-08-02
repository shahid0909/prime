<?php

namespace App\Models\ControllerOfExamination;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControllerOfExamination extends Model
{
    use HasFactory;

    protected $fillable = ['papers','status'];
}
