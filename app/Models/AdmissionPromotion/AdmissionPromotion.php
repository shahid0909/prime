<?php

namespace App\Models\AdmissionPromotion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionPromotion extends Model
{
    use HasFactory;
    protected $fillable = ['a_title','image','status'];
}
