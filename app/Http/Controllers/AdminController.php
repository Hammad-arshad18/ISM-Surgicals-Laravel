<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\BasicInfo;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        if (session()->get('userlogin') == true) {
            return view('admin.dashboard');
        } else {
            return redirect(route('admin.login'));
        }
    }

    public function loginview()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $userPassword = md5($request['password']);
        $userEmail = $request['email'];

        $user = Admin::where('email', '=', "$userEmail")->where('password', '=', "$userPassword")->first();
        if (!is_null($user)) {
            session()->put('userlogin', true);
            return redirect(route('admin'));
        } else {
            return redirect(route('admin.login'));
        }
    }

    public function logout()
    {
        session()->forget('userlogin');
        return redirect(route('home'));
    }


    public function info()
    {
        $info = BasicInfo::find(1);
        $data = compact('info');
        return view('admin.info')->with($data);
    }

    public function updateInfo(Request $request)
    {
        $info = BasicInfo::find(1);
        $info->email = $request['email'];
        $info->phone_no = $request['phone_no'];
        $info->address = $request['address'];
        $info->facebook = $request['facebook'];
        $info->twitter = $request['twitter'];
        $info->instagram = $request['instagram'];
        $info->description = $request['description'];
        $info->save();
        return redirect(route('admin'));
    }


    public function listProducts(){
        $products=Product::all();
        $data=compact('products');
        return view('admin.products-list')->with($data);
    }

    public function addProductView(){
        $cat=Category::all();
        $data=compact('cat');
        return view('admin.add-products')->with($data);
    }

    public function addProduct(Request $request)
    {
        $product=new Product;
        $product->name=$request['name'];
        $product->slug = str_replace(" ","-",strtolower($request['name']));
        $product->category_id=$request['category'];
        $product->description=$request['description'];
        $image_name=str_replace("public/","",$request->file('image')->store('public'));
        $product->image=$image_name;
        $product->save();
        return redirect(route('admin'));
    }

    public function deleteProduct(Product $id){
        $del_image=str_replace(url('').'/',"", $id->image);
        File::delete($del_image);
        $id->delete();
        // echo "<pre>$del_image</pre>";
        return redirect()->back();
    }


    public function listCategories()
    {
        $categories = Category::all();
        $data = compact('categories');
        return view('admin.category-list')->with($data);
    }

    public function addCategoryView()
    {
        return view('admin.add-category');
    }

    public function addCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request['name'];
        $category->slug = str_replace(" ", "-", strtolower($request['name']));
        $category->save();
        return redirect(route('admin'));
    }

    public function deleteCategory(Category $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
