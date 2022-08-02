<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassageDeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massage_deans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('faculty_id')->unsigned()->index();
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');
            $table->bigInteger('e_id')->unsigned()->index();
            $table->foreign('e_id')->references('id')->on('faculty_members')->onDelete('cascade');
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
        Schema::dropIfExists('massage_deans');
    }
}
