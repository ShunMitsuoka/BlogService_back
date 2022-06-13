<?php

namespace Tests\Unit\Domain\RootUser;

use PHPUnit\Framework\TestCase;
use Packages\Domain\Models\RootUser\UserId;

class UserIdTest extends TestCase
{
    public function test_コンストラクタに99を設定したらidとして99が取得できる()
    {
        $id = 99;
        $user_id = new UserId($id);
        $this->assertSame($user_id->getId(), $id);
    }
    public function test_コンストラクタに100を設定したらidとして100が取得できる()
    {
        $id = 100;
        $user_id = new UserId($id);
        $this->assertSame($user_id->getId(), $id);
    }
}
