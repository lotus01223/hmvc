<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeturedItEngineerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fetured_it_engineers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('engineer_image');
            $table->string('comment');
            $table->string('nickname')->nullable();
            $table->integer('age');
            $table->string('address');
            $table->tinyInteger('status');
            $table->integer('order');
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
        Schema::dropIfExists('fetured_it_engineers');
    }
}
