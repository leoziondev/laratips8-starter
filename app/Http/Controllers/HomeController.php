<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');
        Session::remove('activeNav');

// CREATED
//        $blog = new Blog();
//        $blog->title = 'How start Laravel framework ';
//        $blog->description = 'The first steps ...';
//        $blog->category_id = 1;
//        $blog->save();

// UPDATED
//        $blog = Blog::find(1);
//        $blog->title = 'How start Laravel framework Updated 2021';
//        $blog->description = 'The first steps in 2021 the right way with Laravel 8';
//        $blog->save();

// DELETED
//        $blog = Blog::find(1);
//        $blog->delete();

// DELETED MULTIPLE DATA
//        return Blog::whereIn('id', [2,3,4])->delete();

// READ
//        return Blog::latest()
//            ->get();

        return Blog::whereIn('id', [2])
            ->get();



        return view('home');
    }
}
