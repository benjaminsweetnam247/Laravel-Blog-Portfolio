<?php

namespace bens_portfolio\Http\Controllers;

use bens_portfolio\Http\Requests\SenderRequest;
use bens_portfolio\Sender;
use Illuminate\Http\Request;

use bens_portfolio\Http\Requests;
use bens_portfolio\Http\Controllers\Controller;
use Mail;

class SendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messages = Sender::all();

        return view('mail.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('mail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SenderRequest $request)
    {
        $email = new Sender($request->all());
//        dd($email);
        $email->save();

        Mail::send('mail.show', ['email' => $email], function ($message) use ($email) {
            $message->from('bensport@bens-portfolio.com', 'Benjamin Sweetnam')
                    ->to($email->email, $email->name)
                    ->subject($email->subject);
        });

        return redirect(route('mail.index'));
    }
}
