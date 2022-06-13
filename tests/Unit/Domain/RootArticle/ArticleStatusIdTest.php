<?php

namespace Tests\Unit\Domain\RootArticle;

use Packages\Domain\Models\RootArticle\ArticleStatusId;
use PHPUnit\Framework\TestCase;

class ArticleStatusIdTest extends TestCase
{
    public function test_コンストラクタに99を設定したらidとして99が取得できる()
    {
        $id = 99;
        $status_id = new ArticleStatusId($id);
        $this->assertSame($status_id->getStatusId(), $id);
    }
    public function test_コンストラクタに100を設定したらidとして100が取得できる()
    {
        $id = 100;
        $status_id = new ArticleStatusId($id);
        $this->assertSame($status_id->getStatusId(), $id);
    }
}