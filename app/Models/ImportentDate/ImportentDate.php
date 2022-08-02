<?php

namespace App\Models\ImportentDate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportentDate extends Model
{
    use HasFactory;
    protected $fillable = ['i_title','s_date','e_date','status'];
}
