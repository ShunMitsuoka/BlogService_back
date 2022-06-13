<?php

namespace Packages\Domain\Models\RootArticle;

use Packages\Domain\Interfaces\Models\ValueObjectInterface;

class ArticlePublicClass implements ValueObjectInterface
{
    private ArticlePublicClassId $class_id;
    private string $class_name;

    function __construct(
        ArticlePublicClassId $class_id,
        string $class_name
    ) {
        $this->class_id = $class_id;
        $this->class_name = $class_name;
    }

    public function getPublicClassId() : int{
        return $this->class_id->getPublicClassId();
    }
    public function getPublicClassName() : string{
        return $this->class_name;
    }
}
