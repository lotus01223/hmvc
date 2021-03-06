<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->integer('edu_master_id')->index();
            $table->string('major');
            $table->integer('from_year');
            $table->integer('from_month');
            $table->integer('to_year')->nullable();
            $table->integer('to_month')->nullable();
            $table->tinyInteger('gra_status');
            $table->integer('order');
            $table->timestamps();

            // foreign
            // $table->foreign('edu_master_id')->references('id')->on('education_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
