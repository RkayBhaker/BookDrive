<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonarUser;
use Illuminate\Support\Carbon;

class donarController extends Controller
{
    //
    public function donarDetails(Request $request){
        // $validateData = $request->validate([
        //     "fname" => "required|min:4",
        //     "lname" => "required|min:2",
        //     "phNo" => "required|digits:10",
        //     "email" => "required|email|unique:users",
        //     "address" => "required|min:5",
        //     "donorType" => "required",
        //     "bookCategory" => "required",
        //     "noOfBook" => "required|numeric"
        // ],
        // [
        //     "fname" => "Please insert your first name {min 4 character required}",
        //     "lname" => "Please insert your last name {min 2 character required}",
        //     "phNo" => "Phone number contain 10 digits",
        //     "email" => "Insert your correct email address",
        //     "address" => "Insert your resigdance address",
        //     "donorType" => "Donar Type required",
        //     "bookCategory" => "Please select book category",
        //     "noOfBook" => "Insert total no. of books"
        // ]);

        $message = $request->option1.$request->option2.$request->option3.$request->option4;
        // return $message;

        DonarUser::insert([
            "fname" => $request->fname,
            "lname" => $request->lname,
            "phNo" => $request->phNo,
            "email" => $request->email,
            "address" => $request->address,
            "donorType" => $request->donorType,
            "bookCondition" => $message,
            "bookCategory" => $request->bookCategory,
            "noOfBook" => $request->noOfBook,
            "created_at" => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'Your details submitted successfully.');
    }
}
