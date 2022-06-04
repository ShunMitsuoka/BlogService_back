<?php

namespace Packages\Domain\Models\RootArticle;

// use Packages\Domain\Interfaces\Models\ValueObjectInterface;

class ArticleId
{
    private int $article_id;

    function __construct(int $article_id) {
        $this->article_id = $article_id;
    }

    public function getId() : int{
        return $this->article_id;
    }
}
