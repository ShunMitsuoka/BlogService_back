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
        $article_eloquent = TArticle::
            where('id', $article_id->getId())
            ->where('post_user_id', $post_user->getUserId())
            ->NotDeleted()
            ->first();
        if(is_null($article_eloquent)){
            throw new \Exception('対象記事が存在しません。');
        }
        return new Article(
            new ArticleId($article_eloquent->id),
            $post_user,
            $article_eloquent->title,
            $article_eloquent->content,
        );
    }

    public function getAllByUser(User $post_user, int $limit, int $offset) : array{
        throw new \Exception();
    }
    
    public function insert(Article $article) : Article{
        throw new \Exception();
    }
    
    public function update(Article $article) : Article{
        throw new \Exception();
    }
    
    public function delete() : bool{
        throw new \Exception();
    }
}
