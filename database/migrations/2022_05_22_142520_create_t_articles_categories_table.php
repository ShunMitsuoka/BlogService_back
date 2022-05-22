<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_articles_categories', function (Blueprint $table) {
            $table->id()->comment('記事カテゴリーid');
            $table->integer('article_id')->comment('記事id');
            $table->integer('category_id')->comment('カテゴリーid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_articles_categories');
    }
};
