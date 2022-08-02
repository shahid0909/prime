<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIqacMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iqac_members', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->bigInteger('employ_id')->nullable();
            $table->bigInteger('faculty_member_id')->nullable();
            $table->integer('administrator_type');
            $table->integer('iqac_designation');
            $table->string('ext');
            $table->bigInteger('dept_id')->unsigned()->index()->nullable();
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('status');
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
        Schema::dropIfExists('iqac_members');
    }
}
