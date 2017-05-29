<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('first_name', 122)->nullable();
            $table->string('last_name', 123)->nullable();
            $table->string('nickname',255)->nullable();
            $table->string('bio', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
