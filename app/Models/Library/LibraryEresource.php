<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryEresource extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'title',
        'image',
        'link',
        'status'
    ];
}
