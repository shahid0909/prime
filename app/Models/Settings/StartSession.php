<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'startsession','status',
    ];

}
