<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('j_title');
            $table->string('location');
            $table->string('vacation');
            $table->string('e_status');
            $table->string('experience');
            $table->longText('e_requirement');
            $table->longText('salary');
            $table->longText('description');
            $table->string('age');
            $table->string('p_date');
            $table->string('d_date');
            $table->string('status');
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
        Schema::dropIfExists('job_posts');
    }
}
