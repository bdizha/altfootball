<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->index('slug');
            $table->index('created_at');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->index('slug');
            $table->index('created_at');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->index('user_id');
            $table->index('type_id');
            $table->index('type');
            $table->index('created_at');
        });

        Schema::table('dribbles', function (Blueprint $table) {
            $table->index('user_id');
            $table->index('type_id');
            $table->index('type');
        });

        Schema::table('fanbases', function (Blueprint $table) {
            $table->index('user_id');
            $table->index('created_at');
        });

        Schema::table('fanbases_posts', function (Blueprint $table) {
            $table->index('fanbase_id');
            $table->index('post_id');
        });

        Schema::table('followers', function (Blueprint $table) {
            $table->index('is_active');
            $table->index('followable_id');
            $table->index('followable_type');
        });

        Schema::table('tags_posts', function (Blueprint $table) {
            $table->index('tag_id');
            $table->index('post_id');
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
