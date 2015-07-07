<?php

namespace bens_portfolio\Http\Controllers;


use bens_portfolio\Image;
use Illuminate\Http\Request;

use bens_portfolio\Http\Requests;
use bens_portfolio\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{
    public function gallery()
    {
        $pictures = Image::all();

        return view('gallery.index', compact('pictures'));

    }
}
