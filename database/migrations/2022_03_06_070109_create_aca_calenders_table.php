<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaCalendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aca_calenders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('session_id')->unsigned()->index();
            $table->foreign('session_id')->references('id')->on('start_sessions')->onDelete('cascade');
            $table->string('upload_file');
            $table->integer('status');
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
        Schema::dropIfExists('aca_calenders');
    }
}
