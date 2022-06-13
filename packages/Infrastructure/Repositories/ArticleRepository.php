<?php

namespace Packages\Infrastructure\Repositories;

use Packages\Domain\Interfaces\Repositories\ArticleRepositoryInterface;
use Packages\Domain\Models\RootArticle\Article;
use Packages\Domain\Models\RootArticle\ArticleId;
use Packages\Domain\Models\RootUser\User;
use App\Models\TArticle;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getByUser(User $post_user, ArticleId $article_id) : Article{
        // $article_eloquent = TArticle::
        //     where('id', $article_id->getId())
        //     ->where('post_user_id', $post_user->getUserId())
        //     ->NotDeleted()
        //     ->first();
        // if(is_null($article_eloquent)){
        //     throw new \Exception('対象記事が存在しません。');
        // }
        // return new Article(
        //     new ArticleId($article_eloquent->id),
        //     $post_user,
        //     $article_eloquent->title,
        //     $article_eloquent->content,
        //     $article_eloquent->statud_id,
        //     $article_eloquent->public_class_id,
        //     $article_eloquent->thumbnail_url,
        // );
        throw new \Exception();
    }

    public function getAllByUser(User $post_user, int $limit, int $offset) : array{
        throw new \Exception();
    }
    
    public function save(User $post_user, Article $article) : Article{
        $article_eloquent = TArticle::create([
            'post_user_id' => $post_user->getUserId(),
            'title' => $article->getTitle(),
            'content' => $article->getContent(),
            'status_id' => $article->getStatus()->getStatusId(),
            'public_class_id' => $article->getPublicClass()->getPublicClassId(),
            'thumbnail_url' => $article->getThumbnailUrl(),
        ]);
        $created_article = new Article(
            new ArticleId($article_eloquent->id),
            $article->getTitle(),
            $article->getContent(),
            $article->getThumbnailUrl(),
            $article->getStatus(),
            $article->getPublicClass(),
            $article_eloquent->created_at,
            $article_eloquent->updated_at,
        );
        return $created_article;

    }
    
    public function update(User $post_user, Article $article) : Article{
        throw new \Exception();
    }
    
    public function delete() : bool{
        throw new \Exception();
    }
}
