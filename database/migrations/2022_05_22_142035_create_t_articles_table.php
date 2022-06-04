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
            $table->unsignedBigInteger('post_user_id')->comment('ユーザid');
            $table->tinyInteger('status_id')->comment('記事ステータスid');
            $table->tinyInteger('public_class_id')->comment('公開区分id');
            $table->string('title', 255)->comment('タイトル');
            $table->text('content')->comment('内容');
            $table->string('profile_image', 255)->nullable()->comment('サムネイル');
            $table->timestamps();
            $table->boolean('deleted_flg')->default(false)->comment('削除フラグ');
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
