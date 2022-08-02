<?php

namespace App\Models\IQAC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IqacDetails extends Model
{
    use HasFactory;

    protected $fillable = ['title','file','category','date','status'];
}
