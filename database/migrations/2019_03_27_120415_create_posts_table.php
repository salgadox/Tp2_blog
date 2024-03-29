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
            $table->bigIncrements('id');
            $table->unsignedInteger('post_author'); //post_author is used also to identify roles (post_author == 1 == admin; everything else is user) 
            $table->timestamp('post_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('post_content');
            $table->text('post_title');
            $table->string('post_status',20)->default('publish');
            $table->string('post_name',200)->default('');
            $table->string('post_type',20)->default('article');
            $table->text('post_category')->nullable();
            
            $table->foreign('post_author',20)->references('id')->on('users')->('casacade'); 
            //if the post_author is deleted we are going to cascade back and delete everything else. 
            
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
