<?php

namespace App\Models\FormerViceChancellor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormerViceChancellor extends Model
{
    use HasFactory;
    protected $fillable = ['f_name','image','s_date','e_date','status'];
}
