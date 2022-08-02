<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_members', function (Blueprint $table) {
            $table->id();
            $table->string('m_name');
            $table->string('designation_id');
            $table->string('adi_designation_id')->nullable();
            $table->string('edu_que');
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->string('about_me');
            $table->string('research_area')->nullable();
            $table->string('research_interest')->nullable();
            $table->string('publication')->nullable();
            $table->string('experience')->nullable();
            $table->string('image');
            $table->string('type');
            $table->string('leave')->nullable();
            $table->bigInteger('dept_id')->unsigned()->index();
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade');
            $table->bigInteger('school_id')->nullable();
            $table->string('status')->nullable();
            $table->integer('parity');
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
        Schema::dropIfExists('faculty_members');
    }
}
