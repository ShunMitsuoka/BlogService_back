<?php

namespace Tests\Unit\Domain\RooyUser;

use Exception;
use PHPUnit\Framework\TestCase;
use Packages\Domain\Models\RootUser\User;
use Packages\Domain\Models\RootUser\UserId;

class UserTest extends TestCase
{
    private string $user_name = 'テストユーザー';
    private string $user_email = 'test@text.com';

    public function test_コンストラクで設定した値が正しく取得できる()
    {
        $id = 100;
        $user_id = new UserId($id);
        $user = new User($user_id, $this->user_name, $this->user_email);
        $this->assertSame($user->getUserId(), $id);
        $this->assertSame($user->getName(), $this->user_name);
        $this->assertSame($user->getEmail(), $this->user_email);
    }

    public function test_ユーザーIDが設定されていない場合にidを取得しようとした場合、例外がスローされる()
    {
        $user_id = null;
        $user = new User($user_id, $this->user_name, $this->user_email);
        $this->expectException(\Exception::class);
        $user->getUserId();
    }
}
