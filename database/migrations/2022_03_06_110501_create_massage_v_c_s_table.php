<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassageVCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massage_v_c_s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('e_id')->unsigned()->index();
            $table->foreign('e_id')->references('id')->on('employs')->onDelete('cascade');
            $table->string('short_massage');
            $table->longText('long_massage');
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
        Schema::dropIfExists('massage_v_c_s');
    }
}
