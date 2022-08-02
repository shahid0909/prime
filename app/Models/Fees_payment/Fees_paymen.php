<?php

namespace App\Models\Fees_payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fees_paymen extends Model
{
    use HasFactory;
    protected $fillable = ['dept_id','program_id','course_fee','p_result','p_amount','m_fee','r_q_admission','general_information','scholarship','financial_waver','status'];

}
