<?php

namespace App\Models\IQAC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IqacWorkshop extends Model
{
    use HasFactory;
    protected $fillable = ['about','vision','responsibilities','status'];
}
