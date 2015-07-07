<?php

namespace bens_portfolio\Http\Controllers;

use bens_portfolio\Email;
use bens_portfolio\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

use bens_portfolio\Http\Requests;
use bens_portfolio\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','create', 'store']]);
    }

    public function index()
    {
        $emails = Email::all();

        return view('contact.index', compact('emails'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function show(Email $email)
    {
        return view('contact.show', compact('email'));
    }

    public function edit(Email $email)
    {
        return view('contact.edit', compact('email'));
    }

    public function update(Email $email, $request)
    {
        $email->update($request::all());

        return redirect('articles');
    }

    public function store(ContactFormRequest $request)
    {
        $email = new Email($request->all());


        $email->save();

        return redirect('blog');
    }

    public function destroy(Email $email)
    {
        $email->delete();

        return redirect('contact');
    }
}
