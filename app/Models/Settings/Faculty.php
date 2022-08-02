<?php

namespace App\Models\Settings;

use App\Models\Massage\MassageDean;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'establish_year',
    ];

    public function department()
    {
        return $this->hasMany(Department::class);
    }

    public function  dinMessage(){
        return $this->hasMany(MassageDean::class,'faculty_id')->with('employee');
    }



}
