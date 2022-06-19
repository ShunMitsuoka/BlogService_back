<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\BaseApiController;
use Illuminate\Http\Request;
use Packages\Domain\Interfaces\Repositories\ArticleRepositoryInterface;
use Packages\Domain\Models\RootWriter\Writer;
use Packages\Domain\Models\RootUser\UserId;

class ArticleApiController extends BaseApiController
{
    private Writer $writer;
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
        $this->setWriter($request);
        $this->writer->write(
            $request->title,
            $request->content,
            $request->thumbnail_url,
        );
        $this->writer->post();
        $this->makeSuccessResponse();
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

    private function setWriter(Request $request){
        $user = $request->user();
        $this->writer = new Writer(
            new UserId($user->id),
            $user->name,
            $user->email,
            $this->article_repository,
        );
    }
}
