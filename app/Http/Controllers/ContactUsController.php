<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    public function index() {
        Session::put('activeNav', 'contact');

//        Session::flash('alertMessage', 'Contact us form submitted successfully!');

        return view('contact');
    }

    public function store(ContactUsRequest $request)
    {
        dd($request->all());
    }
}
