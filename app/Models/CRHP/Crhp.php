<?php

namespace App\Models\CRHP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crhp extends Model
{
    use HasFactory;

    protected $fillable = ['about','vision','mission','responsibilities','status'];
}
