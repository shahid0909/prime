<?php

namespace App\Models\Notice;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeNotice extends Model
{
    use HasFactory;
    protected $fillable = ['title','date','file','description','status'];

}
