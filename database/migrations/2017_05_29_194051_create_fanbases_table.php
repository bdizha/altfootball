<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFanbasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fanbases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 24)->nullable();
            $table->string('slug', 48);
            $table->string('image', 255)->nullable();
            $table->string('description', 96);
            $table->integer('user_id')->unsigned();
            $table->enum('access', ['public', 'private'])->default("public");
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fanbases');
    }
}
