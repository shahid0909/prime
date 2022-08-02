<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesPaymensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_paymens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dept_id')->unsigned()->index();
            $table->foreign('dept_id')->references('id')->on('departments')->onDelete('cascade');
            $table->bigInteger('program_id')->unsigned()->index();
            $table->foreign('program_id')->references('id')->on('aca_programs')->onDelete('cascade');
            $table->string('course_fee');
            $table->text('p_result');
            $table->text('p_amount');
            $table->text('m_fee');
            $table->longText('r_q_admission');
            $table->longText('general_information');
            $table->longText('scholarship');
            $table->longText('financial_waver');
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
        Schema::dropIfExists('fees_paymens');
    }
}
