<?php

namespace App\Http\Controllers;

//require 'vendor/autoload.php';

use App\Article;
//use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Images;
use Illuminate\Support\Facades\Input;
//use Request;
use Intervention\Image\ImageManager;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class BlogController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::all();


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
     * @param  Request  $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {

        $article = new Article($request->all());
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $article->thumbnail = $name;
        }
        $article->save();
        \Session::flash('flash_message', 'Article Created');
        return redirect('/blog/');
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, ArticleRequest $request)
    {
        $article = Article::get($id);
        $article->update($request->all());
        \Session::flash('flash_message', 'Article Edited');
        return redirect('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        \Session::flash('flash_message', 'Article Removed');

    }
}
