<?php

namespace App\Models\IQAC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IqacResource extends Model
{
    use HasFactory;
    protected $fillable = ['r_title','upload_file','status'];
}
