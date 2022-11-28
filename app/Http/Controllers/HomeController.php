<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all()->take(4);
        $data = compact('products');
        return view('home')->with($data);
    }
}
