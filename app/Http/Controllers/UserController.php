<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $user=User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json(
                [
                    'message'=>"User Not Found",
                    'status'=>0
                ],400
            );
        }else{
            $token=$user->createToken('auth_token')->plainTextToken;
            return response()->json(
                [
                    'message'=>'User Found',
                    'user'=>$user,
                    'token'=>$token,
                ],201
            );
        }
    }

    public function index(){
        return view('User');
    }
}
