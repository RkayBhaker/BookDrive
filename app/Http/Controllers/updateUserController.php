<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;

class updateUserController extends Controller
{
    //
    public function updateUser(Request $request){
        $updateDetails = $request->validate([
            "fname" => "required|min:4",
            "image_name" => "required|mimes:jpg,jpeg,png",
            "phno" => "required|digits:10"
        ],
        [
            "fname" => "Please insert your first name",
            "image_name" => "Please insert Image in correct format",
            "phno" => "Phone number contain at least 10 digit"
        ]
    );

    $original_name = $request->file('image_name');
    $gen_unique = hexdec(uniqid());
    $img_ext = strtolower($original_name->getClientOriginalExtension());
    $img_name = $gen_unique.'.'.$img_ext;
    $location = 'images/userProfile/';
    $last_img = $location.$img_name;
    $original_name -> move($location, $img_name);

    User::where('email', $request->email)
    ->update([
        'name' => $request->fname,
        'lname' => $request->lname,
        'phno' => $request->phno,
        'image_path' => $location.$img_name,
        'password' => $request->passwd,
        'updated_at' => Carbon::now()
    ]);

    return Redirect()->back()->with('success', 'User detials updated successfully.');

    }
}
