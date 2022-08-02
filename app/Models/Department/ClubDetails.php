<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubDetails extends Model
{
    use HasFactory;
    protected $fillable = ['vision','activities','faculty_member_id','description','club_id','status'];
}
