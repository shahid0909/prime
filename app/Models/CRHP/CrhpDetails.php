<?php

namespace App\Models\CRHP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrhpDetails extends Model
{
    use HasFactory;

    protected $fillable = ['title','file','category','date','status'];

}
