<?php

namespace Packages\Domain\Models\RootArticle;

use Packages\Domain\Interfaces\Models\EntityInterface;
use Packages\Domain\Models\RootUser\User;

class Article implements EntityInterface
{
    private ?ArticleId $article_id;
    private User $post_user;
    private string $title;
    private string $content;

    function __construct(
        ?ArticleId $article_id,
        User $post_user,
        string $title,
        string $content,
    ) {
        $this->article_id = $article_id;
        $this->post_user = $post_user;
        $this->title = $title;
        $this->content = $content;
    }

    public function getArticleId():int{
        if(is_null($this->article_id)){
            throw new \Exception('記事IDが存在しません。');
        }
        return $this->article_id->getId();
    }

    public function getPostUser(): User{
        return $this->post_user;
    }

    public function getTitle():string{
        return $this->title;
    }

    public function getContent():string{
        return $this->content;
    }
}
