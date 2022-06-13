<?php

namespace Tests\Unit\Domain\RootArticle;

use Packages\Domain\Models\RootArticle\ArticlePublicClass;
use Packages\Domain\Models\RootArticle\ArticlePublicClassId;
use Packages\Domain\Models\RootArticle\ArticleStatus;
use Packages\Domain\Models\RootArticle\ArticleStatusId;
use PHPUnit\Framework\TestCase;

class ArticlePublicClassTest extends TestCase
{
    private string $class_name = 'プライベート';

    public function test_コンストラクで設定した値が正しく取得できる()
    {
        $id = 100;
        $class_id = new ArticlePublicClassId($id);
        $user = new ArticlePublicClass($class_id, $this->class_name);
        $this->assertSame($user->getPublicClassId(), $id);
        $this->assertSame($user->getPublicClassName(), $this->class_name);
    }
}