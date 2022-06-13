<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Packages\Domain\Interfaces\Repositories\ArticleRepositoryInterface;
use Packages\Domain\Models\RootArticle\Article;
use Packages\Domain\Models\RootUser\User;
use Packages\Domain\Models\RootUser\UserId;

class ArticleApiController extends Controller
{
    private ArticleRepositoryInterface $article_repository;

    public function __construct(ArticleRepositoryInterface $article_repository)
    {
        $this->article_repository = $article_repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new User(new UserId(1), '二階堂');
        $artcle = new Article(
            null,
            $user,
            'titleテスト',
            'contentテスト',
            '1',
            '1',
            '1',
        );
        $this->article_repository->save($artcle);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
