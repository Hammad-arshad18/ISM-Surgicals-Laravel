<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ContactAPIController;

class ContactusController extends Controller
{
    public function index()
    {
        return view('contactus');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "comment" => "required"
        ]);
        $contactUs = new ContactModel;
        $contactUs->name = $request['name'];
        $contactUs->email = $request['email'];
        $contactUs->phone = $request['phone'];
        $contactUs->comment = $request['comment'];
        $contactUs->save();
        // $con=new ContactAPIController;
        // $con->store($request);

        return redirect(route('contact'));
    }
}
