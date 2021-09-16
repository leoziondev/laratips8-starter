<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Scopes\ActiveScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');
        Session::remove('activeNav');

//        $query = Product::inStock();
//        dd($query->toSql(), $query->getBindings());

// With Global Scope
//        return Product::inStock()->get();

        // Debug
        //dd(Product::inStock()->get());

        // Without Global Scope
        return Product::withoutGlobalScope(ActiveScope::class)->inStock()->get();



        return view('home');
    }
}
