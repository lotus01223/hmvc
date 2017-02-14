<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_masters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('edu_en');
            $table->string('edu_jp');
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
        Schema::dropIfExists('education_masters');
    }
}
