<?php

namespace bens_portfolio\Http\Controllers;

use bens_portfolio\Article;
use bens_portfolio\Http\Requests\ArticleRequest;
use Carbon\Carbon;
//use bens_portfolio\Http\Controllers\Auth;
use Auth;
use bens_portfolio\Http\Requests;
use bens_portfolio\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('blog.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateArticleRequest $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        Auth::user()->articles()->create($request->all());

        Flash::success('article created');

        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Article $article)
    {
        return view('blog.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Article $article)
    {
        return view('blog.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
    }
}
