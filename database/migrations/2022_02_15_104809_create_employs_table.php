<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employs', function (Blueprint $table) {
            $table->id();
            $table->string('e_name');
            $table->string('e_designation');
            $table->text('email');
            $table->string('image');
            $table->string('about');
            $table->text('number');
            $table->bigInteger('administrators_id')->unsigned()->index();
            $table->foreign('administrators_id')->references('id')->on('administrators')->onDelete('cascade');
            $table->bigInteger('status')->nullable();
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
        Schema::dropIfExists('employs');
    }
}
