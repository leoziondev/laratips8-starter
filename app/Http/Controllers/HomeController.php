<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');
        Session::remove('activeNav');

//        $title = 'samsung galaxy s20';
//
//        $product = new Product();
//        $product->title = $title;
//        $product->slug = Str::slug($title);
//        $product->price = 1000;
//        $product->is_active = true;
//        $product->save();

//        $title = 'Motorola One';
//
//        $product = new Product();
//        $product->title = $title;
//        $product->slug = Str::slug($title);
//        $product->price = 900;
//        $product->is_active = true;
//        $product->save();

        $product = Product::find(4);
        // Captilize Title
//        $product->title = Str::title($product->title);

        return $product;

        return view('home');
    }
}
