<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNationalityMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nationality_masters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nationality_en');
            $table->string('nationality_jp');
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
        Schema::dropIfExists('nationality_masters');
    }
}
