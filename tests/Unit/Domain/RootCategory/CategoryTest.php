<?php

namespace Tests\Unit\Domain\RootCategory;

use Packages\Domain\Models\RootCategory\CategoryId;
use Packages\Domain\Models\RootCategory\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    private string $category_name = 'Laravel';

    public function test_コンストラクで設定した値が正しく取得できる()
    {
        $id = 100;
        $category_id = new CategoryId($id);
        $category = new Category($category_id, $this->category_name);
        $this->assertSame($category->getCategoryId(), $id);
        $this->assertSame($category->getName(), $this->category_name);
    }
}
