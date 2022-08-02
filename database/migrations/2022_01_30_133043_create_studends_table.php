<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studends', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_id');
            $table->bigInteger('start_session_id')->unsigned()->index();
            $table->foreign('start_session_id')->references('id')->on('start_sessions')->onDelete('cascade');
            $table->bigInteger('program_id')->unsigned()->index();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->bigInteger('shift_id')->unsigned()->index();
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->bigInteger('batche_id')->unsigned()->index();
            $table->foreign('batche_id')->references('id')->on('batches')->onDelete('cascade');
            $table->bigInteger('group_or_section_id')->unsigned()->index();
            $table->foreign('group_or_section_id')->references('id')->on('group_or_sections')->onDelete('cascade');
            $table->string('std_image');
            $table->bigInteger('departments_id')->unsigned()->index();
            $table->foreign('departments_id')->references('id')->on('departments')->onDelete('cascade');
//            $table->bigInteger('department_id')->unsigned()->index();
//            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('studends');
    }
}
