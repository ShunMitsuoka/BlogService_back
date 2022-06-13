<?php

namespace Tests\Unit\Domain\RootArticle;

use Packages\Domain\Models\RootArticle\ArticleId;
use PHPUnit\Framework\TestCase;

class ArticleIdTest extends TestCase
{
    public function test_コンストラクタに99を設定したらidとして99が取得できる()
    {
        $id = 99;
        $article_id = new ArticleId($id);
        $this->assertSame($article_id->getArticleId(), $id);
    }
    public function test_コンストラクタに100を設定したらidとして100が取得できる()
    {
        $id = 100;
        $article_id = new ArticleId($id);
        $this->assertSame($article_id->getArticleId(), $id);
    }
}