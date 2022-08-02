<?php

namespace App\Models\Massage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MassageVC extends Model
{
    use HasFactory;

    protected $fillable = ['e_id','short_massage','long_massage','status'];
}
