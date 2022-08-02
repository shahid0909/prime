<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAddress extends Model
{
    use HasFactory;

    protected $fillable = ['address','phone_number','email','status'];

}
