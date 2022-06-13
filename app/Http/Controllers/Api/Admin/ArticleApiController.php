<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Packages\Domain\Interfaces\Repositories\ArticleRepositoryInterface;
use Packages\Domain\Models\RootWriter\Writer;
use Packages\Domain\Models\RootUser\UserId;

class ArticleApiController extends Controller
{
    private Writer $writer;

    public function __construct(ArticleRepositoryInterface $article_repository)
    {
        $this->writer = new Writer(
            new UserId(1),
            'テスト投稿者',
            'test@test.com',
            $article_repository,
        );
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
        $this->writer->write(
            $request->title,
            $request->content,
            $request->thumbnail_url,
        );
        $this->writer->post();
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
