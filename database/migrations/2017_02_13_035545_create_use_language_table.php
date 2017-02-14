<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('use_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lang_master_id')->index();
            $table->integer('lang_level_master_id')->index();
            $table->timestamps();

            // foreign
            // $table->foreign('lang_master_id')->references('id')->on('language_masters');
            // $table->foreign('lang_level_master_id')->references('id')->on('language_level_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('use_languages');
    }
}
