<?php

namespace App\Http\Controllers;

//require 'vendor/autoload.php';

use App\Article;
//use Illuminate\Http\Request;
use App\Images;
use Illuminate\Support\Facades\Input;
use Request;
use Intervention\Image\ImageManager;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
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
    public function store()
    {
        $article = new Article();
        $article->title = Input::get('title');
        $article->description = Input::get('description');
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $name = time().'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $article->thumbnail = $name;
        }
        $article->save();
        return redirect('/blog/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('blog.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
