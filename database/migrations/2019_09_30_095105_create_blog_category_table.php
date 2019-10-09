<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('blog_id');
            $table->unsignedBigInteger('blogcategory_id');
            $table->timestamps();

            $table->foreign('blog_id')->references('id')->on('blogs');
            $table->foreign('blogcategory_id')->references('id')->on('blogcategories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_category', function(Blueprint $table){
            $table->dropForeign(['blog_id']);
            $table->dropForeign(['blogcategory_id']);
        });

        Schema::dropIfExists('blog_category');
    }
}
