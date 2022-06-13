<?php

namespace Tests\Unit\Domain\RootArticle;

use Packages\Domain\Models\RootArticle\ArticleStatus;
use Packages\Domain\Models\RootArticle\ArticleStatusId;
use PHPUnit\Framework\TestCase;

class ArticleStatusTest extends TestCase
{
    private string $status_name = '公開';

    public function test_コンストラクで設定した値が正しく取得できる()
    {
        $id = 100;
        $status_id = new ArticleStatusId($id);
        $user = new ArticleStatus($status_id, $this->status_name);
        $this->assertSame($user->getStatusId(), $id);
        $this->assertSame($user->getStatusName(), $this->status_name);
    }
}