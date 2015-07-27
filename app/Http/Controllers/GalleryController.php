<?php

namespace App\Http\Controllers;


use App\Images;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
//use Intervention\Image;
//use App\Http\Requests as NormalRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $images = Images::all();

        return view('gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(){

//                            'title',
//                      'description',
//                          'gallery',
//                         'filename',
//                            'image',
//                        'extension'];
        if(Input::hasFile('image')){
              $data = new Images();
              $data->title = Input::get('title');
              $data->description = Input::get('description');
              $data->image = Input::file('image')->getClientOriginalName();
              $data->gallery = 1;
              $data->save();
              $path = public_path().'/images/';

              $image = Image::make(Input::file('image'));
              $image->resize(null, 600, function($constraint) {
                                $constraint->aspectRatio();
                                $constraint->upsize();
              })->save($path . $data->image);
              $image->resize(200, 200, function($constraint) {
                                $constraint->aspectRatio();
                                $constraint->upsize();
                            });
              $image->save($path . 'thumb-' . $data->image);
              $image->greyscale()->save($path . 'grey-' . $data->image);


            return redirect('/gallery');
//              $gallery = Image::make($input)->resize(null, 600, function($constraint) {
//                  $constraint->aspectRatio();
//                  $constraint-> upsize();
//              });

//
//            $image = Input::file('image');
//            $filename = time().'.'.$image->getClientOriginalExtension();
//
//            $path = public_path('images/'.$filename);
//
//            Image::make($image->getRealPath())->resize(200, 200)->save($path);
//            return $image;

        }


//        $image = new Images();
//        $image->title = Input::get('title');
//        $image->description = Input::get('description');
//        if (Input::hasFile('image')) {
//            $file = Input::file('image');
//            $name = time().'-'.$file->getClientOriginalName();
//            $file->move(public_path().'/images/', $name);
//            $image->thumbnail = $name;
//        }
//        $image->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $image = Images::find($id);
        return view('gallery.show', compact('image'));
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
