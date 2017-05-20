<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('post_title',250);
            $table->text('post_content');
            $table->string('post_slug',250);
            $table->integer('post_user_id');
            $table->string('post_thumbnail');
            $table->integer('post_comment_count')->default(0);
            $table->integer('post_view_count')->default(0);
            $table->smallInteger('post_status')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
