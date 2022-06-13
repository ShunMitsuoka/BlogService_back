<?php

namespace Packages\Domain\Models\RootArticle;

use Packages\Domain\Interfaces\Models\ValueObjectInterface;

class ArticlePublicClassId implements ValueObjectInterface
{
    private int $class_id;

    function __construct(int $class_id) {
        $this->class_id = $class_id;
    }

    public function getPublicClassId() : int{
        return $this->class_id;
    }
}
