<?php

namespace Packages\Domain\Models\RootCategory;

use Packages\Domain\Interfaces\Models\ValueObjectInterface;

class CategoryId implements ValueObjectInterface
{
    private int $category_id;

    function __construct(int $category_id) {
        $this->category_id = $category_id;
    }
    public function getId() : int{
        return $this->category_id;
    }
}
