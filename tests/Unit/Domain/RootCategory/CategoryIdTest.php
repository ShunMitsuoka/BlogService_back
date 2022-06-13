<?php

namespace Tests\Unit\Domain\RootCategory;

use Packages\Domain\Models\RootCategory\CategoryId;
use PHPUnit\Framework\TestCase;

class CategoryIdTest extends TestCase
{
    public function test_コンストラクタに99を設定したらidとして99が取得できる()
    {
        $id = 99;
        $category_id = new CategoryId($id);
        $this->assertSame($category_id->getId(), $id);
    }
    public function test_コンストラクタに100を設定したらidとして100が取得できる()
    {
        $id = 100;
        $category_id = new CategoryId($id);
        $this->assertSame($category_id->getId(), $id);
    }
}
