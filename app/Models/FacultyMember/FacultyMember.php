<?php

    namespace App\Models\FacultyMember;

    use App\Models\Settings\Department;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class FacultyMember extends Model
    {
        use HasFactory;

        protected $fillable = ['m_name','designation_id','adi_designation_id','edu_que','email',
            'phone','about_me','research_area','research_interest','publication','experience','image','type','leave','dept_id','school_id','status','parity'];

        public function designation()
        {
            return $this->belongsTo(Designation::class,'designation_id', 'id');
        }

        public function department()
        {
            return $this->belongsTo(Department::class,'dept_id', 'id');
        }


    }
