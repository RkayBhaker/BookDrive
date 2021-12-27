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
            "lname" => "required|min:2",
            "phno" => "required|digits:10",
            "passwd" => "required|min:8"
        ],
        [
            "fname" => "Please insert your first name",
            "lname" => "Please insert your last name",
            "phno" => "Phone number contain at least 10 digit",
            "passwd" => "Password contain 8 character"
        ]
    );

    $userEmail = $request->email;
    $fname = $request->fname;
    $lname = $request->lname;
    $fullName = $fname.' '.$lname;

    User::where('email', $request->email)
    ->update([
        'name' => $fullName,
        'phno' => $request->phno,
        'password' => $request->passwd,
        'updated_at' => Carbon::now()
    ]);

    return Redirect()->back()->with('success', 'User detials updated successfully.');

    }
}
