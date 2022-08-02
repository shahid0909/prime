<?php

namespace App\Models\AcaCalender;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaCalender extends Model
{
    use HasFactory;


    protected $fillable = ['session_id','upload_file','status'];


}
