<?php

namespace Packages\Domain\Models\RootArticle;

// use Packages\Domain\Interfaces\Models\EntityInterface;
use Packages\Domain\Models\RootUser\User;

class Article
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
        int $status_id,
        int $public_class_id,
        string $thumbnail_url,

    ) {
        $this->article_id = $article_id;
        $this->post_user = $post_user;
        $this->title = $title;
        $this->content = $content;
        $this->status_id = $status_id;
        $this->public_class_id = $public_class_id;
        $this->thumbnail_url = $thumbnail_url;

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

    public function getStatusId():int{
        return $this->status_id;
    }

    public function getPublicClassId():int{
        return $this->public_class_id;
    }

    public function getThumbnailUrl():string {
        return $this->thumbnail_url;
    }


}
