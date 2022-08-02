<?php

namespace App\Models\BreakingNews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakingNews extends Model
{
    use HasFactory;
    protected $fillable = ['b_title','file','status'];
}
