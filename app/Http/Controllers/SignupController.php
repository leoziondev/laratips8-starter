<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller
{
    public function signupForm() {

        Session::put('activeNav', 'signup');

        return view('signup');
    }

    public function signup(Request $request)
    {
//        dd($request->all());

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['is_admin'] = 0;

        $data = User::create($data);

        return "signup successfuly!";
    }
}
