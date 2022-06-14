<?php

namespace Packages\Domain\Models\RootWriter;

use Carbon\Carbon;
use Exception;
use Packages\Domain\Interfaces\Repositories\ArticleRepositoryInterface;
use Packages\Domain\Models\RootUser\User;
use Packages\Domain\Models\RootArticle\Article;
use Packages\Domain\Models\RootArticle\ArticlePublicClass;
use Packages\Domain\Models\RootArticle\ArticlePublicClassId;
use Packages\Domain\Models\RootArticle\ArticleStatus;
use Packages\Domain\Models\RootArticle\ArticleStatusId;
use Packages\Domain\Models\RootUser\UserId;

class Writer extends User
{
    private ?Article $article;
    private ArticleRepositoryInterface $article_repository;

    function __construct(
        ?UserId $user_id,
        string $name,
        string $email,
        ArticleRepositoryInterface $article_repository,
    ){
        parent::__construct(
            $user_id,
            $name,
            $email
        );
        $this->article_repository = $article_repository;
    }

    public function write(
        string $title,
        string $content,
        ?string $thumbnail_url
    ){
        $this->article = new Article(
            null,
            $title,
            $content,
            $thumbnail_url,
            new ArticleStatus(
                new ArticleStatusId(1),
                '公開'
            ),
            new ArticlePublicClass(
                new ArticlePublicClassId(1),
                'プライベート'
            ),
            new Carbon(),
            new Carbon()
        );
    }

    public function post(){
        if(is_null($this->article)){
            throw new Exception('投稿する記事が存在しません。');
        }
        $this->article = $this->article_repository->save($this, $this->article);
    }
}
