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
        Schema::create('t_articles', function (Blueprint $table) {
            $table->id()->comment('記事id');
            $table->integer('post_user_id')->comment('ユーザid');
            $table->string('title')->comment('タイトル');
            $table->string('content')->comment('内容');
            $table->string('profile_image')->nullable()->comment('サムネイル');
            $table->integerinteger('delete_flg')->default(0)->comment('削除フラグ');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_articles');
    }
};
