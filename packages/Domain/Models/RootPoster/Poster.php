<?php

namespace Packages\Domain\Models\RootUser;

use Packages\Domain\Interfaces\Models\EntityInterface;
use Packages\Domain\Models\RootUser\User;
use Packages\Domain\Models\RootArticle\Article;

class Poster extends User
{
    private ?Article $article;

    function __construct(){}

    public function write(){
        return $this->article = new Article(
            null,
            $user,
            'titleテスト',
            'contentテスト',
            '1',
            '1',
            '1',
        );
    }
}
