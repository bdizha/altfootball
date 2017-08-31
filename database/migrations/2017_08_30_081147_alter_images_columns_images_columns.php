<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterImagesColumnsImagesColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('thumb_image');
            $table->dropColumn('small_image');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('thumb_image');
            $table->dropColumn('small_image');
            $table->dropColumn('big_image');
        });

        Schema::table('fanbases', function (Blueprint $table) {
            $table->dropColumn('thumb_image');
            $table->dropColumn('small_image');
            $table->dropColumn('big_image');
            $table->dropColumn('big_cover');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('thumb_image', 255)->nullable();
            $table->string('small_image', 255)->nullable();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->string('thumb_image', 255)->nullable();
            $table->string('small_image', 255)->nullable();
            $table->string('big_image', 255)->nullable();
        });

        Schema::table('fanbases', function (Blueprint $table) {
            $table->string('thumb_image', 255)->nullable();
            $table->string('small_image', 255)->nullable();
            $table->string('big_image', 255)->nullable();
            $table->string('big_cover', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
