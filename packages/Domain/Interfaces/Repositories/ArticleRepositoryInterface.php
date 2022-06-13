<?php

namespace Packages\Domain\Interfaces\Repositories;

use Packages\Domain\Models\RootArticle\Article;
use Packages\Domain\Models\RootArticle\ArticleId;
use Packages\Domain\Models\RootUser\User;

interface ArticleRepositoryInterface 
{
    public function getByUser(User $post_user, ArticleId $article_id) : Article;
    public function getAllByUser(User $post_user, int $limit, int $offset) : array;
    public function save(Article $article) : Article;
    public function update(Article $article) : Article;
    public function delete() : bool;
}
