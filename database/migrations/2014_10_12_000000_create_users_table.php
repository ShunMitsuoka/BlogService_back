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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ユーザid');
            $table->string('name', 255)->comment('ユーザ名');
            $table->string('password', 255)->comment('パスワード');
            $table->string('email', 255)->comment('メールアドレス')->unique();
            $table->string('profile_image', 255)->nullable()->comment('トップ画像');
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
        Schema::dropIfExists('users');
    }
};
