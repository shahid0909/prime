<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->id();
            $table->string('s_id')->nullable();
            $table->string('batch')->nullable();
            $table->string('s_name');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('b_date');
            $table->integer('gender');
            $table->string('nationality');
            $table->string('enroll_date');
            $table->string('phone');
            $table->string('email');
            $table->integer('freedom_fighter');
            $table->integer('poor');
            $table->integer('f_semester')->default(0);
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_infos');
    }
}
