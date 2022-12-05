<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Constraint\Count;

class ProductsAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with('category')->get();
        if(is_null($products)){
            $response=[
                'message'=>Count($products) . ' Products Found',
                'status'=>0,
            ];
        }else{
            $response = [
                'message' => Count($products) . ' Products Found',
                'status' => 1,
                'data' => $products,
            ];
        }
        return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>['required'],
            'image'=>['required','image','max:3072'],
            'description'=>['required',],
            'category_id'=>['required'],
        ]);
        if($validate->fails()){
            return response()->json($validate->messages(),400);
        }else{
            DB::beginTransaction();
            try{
                $slug=str_replace(" ","-",strtolower($request['name']));
                $image=str_replace("public/","",$request->file('image')->store('public'));
                $requestData=[
                    'name'=>$request['name'],
                    'description'=>$request['description'],
                    'category_id'=>$request['category_id'],
                    'slug'=>$slug,
                    'image'=>$image,
                ];
                Product::create($requestData);
                DB::commit();
                return response()->json([
                    'message'=>'Product Added Successfully',
                    'status'=>1
                ],200);
            }catch(\Exception $err){
                Db::rollBack();
                return response()->json([
                    'message'=>'Internal Server Error',
                    'status'=>0
                ],500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::with('category')->find($id);
        if(is_null($product)){
            return response()->json([
                'message'=>'No Product Found',
                'status'=>0,
            ],400);
        }else{
            return response()->json(
                [
                    'message'=>'Prodcut Found',
                    'status'=>1,
                    'data'=>$product,
                ],200
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        // echo "<pre>". $request->all()."</pre>";
        // die();
        if(is_null($product)){
            return response()->json([
                'message'=>'Product Not Found',
                'status'=>0
            ],404);
        }else{
            DB::beginTransaction();
            try{
                $slug = str_replace(" ", "-", strtolower($request->name));
                $imageUpload = str_replace("public/", "", $request->file('image')->store('public'));
                $product->name = $request->name;
                $product->description = $request->description;
                $product->image = $imageUpload;
                $product->slug = $slug;
                $product->category_id = $request->category_id;
                $product->save();
                DB::commit();
                return response()->json([
                    'message' => 'Data Updated Successfully',
                    'status' => 1
                ],200);
            }catch(\Exception $err){
                DB::rollBack();
                return response()->json([
                    'message' => 'Internal Server Error',
                    'status' => 0,
                    'error'=>$err->getMessage(),
                ], 500);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        if(is_null($product)){
            $response=[
                'message'=>"Product Not Found",
                'status'=>0
            ];
        }else{
            $product->delete();
            $response=[
                'message'=>'Product Deleted Successfully',
                'status'=>1
            ];
        }
        return response()->json($response,200);
    }
}
