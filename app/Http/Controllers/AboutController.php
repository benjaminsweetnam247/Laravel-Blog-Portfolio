<?php

namespace bens_portfolio\Http\Controllers;

use Illuminate\Http\Request;

use bens_portfolio\Http\Requests;
use bens_portfolio\Http\Controllers\Controller;

class AboutController extends Controller {

    public function index()
    {
        return view('about.index');
    }

    public function store()
    {
    }
}
