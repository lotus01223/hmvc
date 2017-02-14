<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_objectives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_master_id')->index();
            $table->integer('prefectures_master_id')->index();
            $table->integer('period_master_id')->index();
            $table->integer('current_salary')->unsigned();
            $table->integer('expected_salary')->unsigned();
            $table->timestamps();

            // foreign
            // $table->foreign('job_master_id')->references('id')->on('job_masters');
            // $table->foreign('prefectures_master_id')->references('id')->on('prefectures_masters');
            // $table->foreign('period_master_id')->references('id')->on('period_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_objectives');
    }
}
