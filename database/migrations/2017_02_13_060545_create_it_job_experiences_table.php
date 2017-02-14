<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItJobExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('from_year')->unsigned();
            $table->integer('from_month')->unsigned();
            $table->integer('to_year')->unsigned()->nullable();
            $table->integer('to_month')->unsigned()->nullable();
            $table->integer('job_master_id')->unsigned();
            $table->integer('it_skill_id')->unsigned();
            $table->integer('order');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();

            // foreign
            $table->foreign('job_master_id')->references('id')->on('job_masters');
            $table->foreign('it_skill_id')->references('id')->on('it_skill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_experiences');
    }
}
