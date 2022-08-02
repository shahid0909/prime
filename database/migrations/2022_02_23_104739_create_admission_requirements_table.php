<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_requirements', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->string('schedule');
            $table->string('a_l_date');
            $table->string('a_t_date');
            $table->longText('a_requirement');
            $table->longText('how_to_apply');
            $table->longText('admission_fee');
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
        Schema::dropIfExists('admission_requirements');
    }
}
