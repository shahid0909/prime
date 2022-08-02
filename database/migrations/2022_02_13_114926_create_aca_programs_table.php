<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_programs', function (Blueprint $table) {
            $table->id();
            $table->string('p_name');
            $table->string('credits');
            $table->string('m_year');
            $table->string('m_course');
            $table->string('cgpa');
            $table->string('p_objective');
            $table->string('p_outcome');
            $table->string('c_structure');
            $table->string('c_distribution');
            $table->bigInteger('dept_id')->unsigned()->index();
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade');
            $table->bigInteger('status');
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
        Schema::dropIfExists('aca_programs');
    }
}
