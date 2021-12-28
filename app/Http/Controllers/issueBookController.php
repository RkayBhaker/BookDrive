<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\issuebook;
use Illuminate\Support\Carbon;

class issueBookController extends Controller
{
    //
    public function issueBook(Request $request){
        $validateData = $request->validate([
            "bookCategory" => "required",
            "bookSet" => "required",
            "fname" => "required|min:4",
            "lname" => "min:2",
            "phno" => "required|digits:10",
            "email" => "required|email|unique:user",
            "issuedate" => "required",
            "returndate" => "required",
            "address" => "required|min:10",
            "agreement_I" => "required",
            "agreement_II" => "required"
        ],
        [
            "bookCategory" => "Please select your book category",
            "bookSet" => "Please select book set type",
            "fname" => "Please enter your first name",
            "lname" => "Last name should be atleast minimum 2 character",
            "phno" => "Phone number should have at least 10 digits",
            "email" => "Please enter your correct email address",
            "issuedate" => "Issue date required",
            "returndate" => "Return date required",
            "address" => "Enter your correct address",
            "agreement_I" => "Field required",
            "agreement_II" => "Field required"
        ]);

        $fname = $request->fname;
        $lname = $request->lname;
        $fullName = $fname.' '.$lname;

        issuebook::insert([
            "book_category"=> $request->bookCategory,
            "book_set"=> $request->bookSet,
            "fullname"=> $fullName,
            "phno"=> $request->phno,
            "email"=> $request->email,
            "issue_date"=> $request->issuedate,
            "return_date"=> $request->returndate,
            "address"=> $request->address,
            "agreement I"=> $request->agreement_I,
            "agreement I"=> $request->agreement_II,
            "created_at"=> Carbon::now()
        ]);

        return Redirect()->back()->with('success', 'form submitted successfully.');
    }
}
