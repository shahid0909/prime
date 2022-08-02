<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_infos', function (Blueprint $table) {
            $table->id();
            $table->string('exam_name');
            $table->bigInteger('exam_session_id');
//            $table->foreign('exam_session_id')->references('id')->on('start_sessions')->onDelete('cascade');
            $table->string('date_of_exam');
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
        Schema::dropIfExists('exam_infos');
    }
}
