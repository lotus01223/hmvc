<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItSkillMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('it_skill_masters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('skill_cate_master_id')->index();
            $table->string('skill_en_name');
            $table->string('skill_jp_name');
            $table->timestamps();

            // foreign
            // $table->foreign('skill_cate_master_id')->references('id')->on('it_skill_category_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('it_skill_masters');
    }
}
