<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassageDeptHadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massage_dept_hads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dept_id')->unsigned()->index();
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade');
            $table->bigInteger('faculty_member_id')->unsigned()->index();
            $table->foreign('faculty_member_id')->references('id')->on('faculty_members')->onDelete('cascade');
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
        Schema::dropIfExists('massage_dept_hads');
    }
}
