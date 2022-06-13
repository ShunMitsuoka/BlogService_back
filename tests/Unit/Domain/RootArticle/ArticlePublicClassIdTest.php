<?php

namespace Tests\Unit\Domain\RootArticle;

use Packages\Domain\Models\RootArticle\ArticlePublicClassId;
use PHPUnit\Framework\TestCase;

class ArticlePublicClassIdTest extends TestCase
{
    public function test_コンストラクタに99を設定したらidとして99が取得できる()
    {
        $id = 99;
        $public_class_id = new ArticlePublicClassId($id);
        $this->assertSame($public_class_id->getPublicClassId(), $id);
    }
    public function test_コンストラクタに100を設定したらidとして100が取得できる()
    {
        $id = 100;
        $public_class_id = new ArticlePublicClassId($id);
        $this->assertSame($public_class_id->getPublicClassId(), $id);
    }
}