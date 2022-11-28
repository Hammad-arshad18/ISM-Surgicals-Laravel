<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $owl_items = Product::orderBy('created_at', 'desc')->take(15)->get();
        $products = Product::all()->take(4);
        $data = compact('products', 'owl_items');
        return view('home')->with($data);
    }
}
