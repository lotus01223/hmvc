<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('it_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('it_skill_master_id')->index();
            $table->integer('experience_master_id')->index();
            $table->integer('order');
            $table->timestamps();

            // foreign
            // $table->foreign('it_skill_master_id')->references('id')->on('it_skill_masters');
            // $table->foreign('experience_master_id')->references('id')->on('it_expreience_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('it_skills');
    }
}
