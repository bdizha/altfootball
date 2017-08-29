<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterFansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('fans');

        Schema::create('fans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requester_id')->unsigned();
            $table->integer('sent_id')->unsigned();
            $table->boolean('is_active')->default(false);
            $table->timestamps();

            $table->foreign('requester_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('sent_id')
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
        Schema::table('fans', function (Blueprint $table) {
            //
        });
    }
}
