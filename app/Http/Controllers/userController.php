<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\image;

class userController extends Controller
{
    //
    public function userImage(Request $request){
        $validateData = $request->validate([
            "image_name" => "required|mimes:jpg,jpeg,png"
        ],
        [
            "image_name" => "Please insert Image in correct format"
        ]);


        $original_name = $request->file('image_name');
        $gen_unique = hexdec(uniqid());
        $img_ext = strtolower($original_name->getClientOriginalExtension());
        $img_name = $gen_unique.'.'.$img_ext;
        $location = 'images/userProfile/';
        $last_img = $location.$img_name;
        $original_name -> move($location, $img_name);

        image::insert([
            'user_id' => $request->user_id,
            'image_name' => $request->image_name,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success', 'image uploaded successfully');
    }
}