<?php

namespace App\Models\AdmissionRequirement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionRequirement extends Model
{
    use HasFactory;
    protected $fillable = ['type','schedule','a_l_date','a_t_date','a_requirement','how_to_apply','status'];
}
