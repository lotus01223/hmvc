<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assessment_master_id')->unsigned();
            $table->string('name');
            $table->string('evaluation');
            $table->integer('score');
            $table->integer('attempts');
            $table->string('rank');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();

            // foreign
            $table->foreign('assessment_master_id')->references('id')->on('assessment_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_results');
    }
}
