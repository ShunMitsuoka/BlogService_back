<?php

namespace Packages\Domain\Models\RootArticle;

use Carbon\Carbon;
use Packages\Domain\Interfaces\Models\EntityInterface;
use Packages\Domain\Models\RootCategory\Category;
use Packages\Domain\Models\RootUser\User;

class Article implements EntityInterface
{
    private ?ArticleId $article_id;
    private string $title;
    private string $content;
    private ?string $thumbnail_url;
    private ArticlePublicClass $public_class;
    private ArticleStatus $status;
    private ?Carbon $posted_at;
    private ?Carbon $updated_at;
    private array $categories;

    function __construct(
        ?ArticleId $article_id,
        string $title,
        string $content,
        ?string $thumbnail_url,
        ArticleStatus $status,
        ArticlePublicClass $public_class,
        Carbon $posted_at,
        Carbon $updated_at
    ) {
        $this->article_id = $article_id;
        $this->title = $title;
        $this->content = $content;
        $this->thumbnail_url = $thumbnail_url;
        $this->public_class = $public_class;
        $this->status = $status;
        $this->posted_at = $posted_at;
        $this->updated_at = $updated_at;
    }

    public function getArticleId():int{
        if(is_null($this->article_id)){
            throw new \Exception('記事IDが存在しません。');
        }
        return $this->article_id->getArticleId();
    }

    public function getTitle():string{
        return $this->title;
    }

    public function getContent():string{
        return $this->content;
    }

    public function getThumbnailUrl():?string {
        return $this->thumbnail_url;
    }

    public function getPublicClass():ArticlePublicClass{
        return $this->public_class;
    }

    public function getStatus():ArticleStatus{
        return $this->status;
    }

    public function getPostedAt():Carbon{
        return $this->posted_at;
    }

    public function getUpdatedAt():Carbon{
        return $this->updated_at;
    }
}
