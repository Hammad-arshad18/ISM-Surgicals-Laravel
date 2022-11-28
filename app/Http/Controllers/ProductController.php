<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request['category'] != null) {
            $cat = $request['category'];
            $products = Product::where('category_id', '=', "$cat")->paginate();
            $categories = Category::all();
            $data = compact('products', 'categories');
            return view('products')->with($data);
        } else {
            $products = Product::paginate(6);
            $categories = Category::all();
            $data = compact('products', 'categories');
            return view('products')->with($data);
        }
    }

    public function product($slug = null)
    {
        $product = Product::where('slug', '=', "$slug")->get();
        $data = compact('product');
        return view('product-item')->with($data);
    }
}
