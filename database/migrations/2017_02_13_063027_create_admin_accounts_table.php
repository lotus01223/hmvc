<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('division');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('extension');
            $table->boolean('status')->default(false);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();
            $table->timestamp('lastlogin_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_accounts');
    }
}
