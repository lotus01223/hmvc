<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageLevelMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_level_masters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lang_level_en');
            $table->string('lang_level_jp');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_level_masters');
    }
}
