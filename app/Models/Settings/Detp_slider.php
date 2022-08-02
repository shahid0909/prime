<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detp_slider extends Model
{
    use HasFactory;


    protected $fillable = [
        'image',
        'title',
        'dept_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
