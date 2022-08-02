<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassageChairmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massage_chairmen', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('e_id')->unsigned()->index();
            $table->foreign('e_id')->references('id')->on('employs')->onDelete('cascade');
            $table->longText('short_massage');
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
        Schema::dropIfExists('massage_chairmen');
    }
}
