<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptAddress extends Model
{
    use HasFactory;

    protected $fillable = ['address','phone_number','email','dept_id','status'];
}
