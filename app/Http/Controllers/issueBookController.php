<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\issuebook;
use App\Models\demo;
use App\Models\order;
use App\Models\donated_Book;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\userOrderContoller;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class issueBookController extends Controller
{
    //
    public function issueBook(Request $request){
        // $validateData = $request->validate([
        //     "fname" => "required|min:4",
        //     "lname" => "min:2",
        //     "phno" => "required|digits:10",
        //     "email" => "required|email",
        //     "issuedate" => "required",
        //     // "returndate" => "required",
        //     "address" => "required|min:10",
        //     "agreement_I" => "required",
        //     "agreement_II" => "required"
        // ],
        // [
        //     "fname" => "Please enter your first name",
        //     "lname" => "Last name should be atleast minimum 2 character",
        //     "phno" => "Phone number should have at least 10 digits",
        //     "email" => "Please enter your correct email address",
        //     "issuedate" => "Issue date required",
        //     // "returndate" => "Return date required",
        //     "address" => "Enter your correct address",
        //     "agreement_I" => "Field required",
        //     "agreement_II" => "Field required"
        // ]);

        $fname = $request->fname;
        $lname = $request->lname;
        $fullName = $fname.' '.$lname;

        $orderId = $request->orderId;
        $request->session('cart')->put('uniqueOrderId', $orderId);

        $userToken = Auth::user()->userToken;

        foreach(session('cart') as $id => $details){
            $title = $details['title'];
            $category = $details['category'];
            $board = $details['board'];
            $token = $details['unique_id'];
            $orderId = session()->get('uniqueOrderId');

            order::insert([
                "userToken" => $userToken,
                "title" => $title,
                "category" => $category,
                "board" => $board,
                "token" => $token,
                "orderId" => $orderId,
                "created_at" => carbon::now()
            ]);

            donated_Book::where("token", $token)
            ->where("category", $category)
            ->update(['status' => 0]);
            
        }

        demo::insert([
            "userToken" => Auth::user()->userToken,
            "fullname"=> $fullName,
            "orderId"=> $orderId,
            "phno"=> $request->phno,
            "email"=> $request->email,
            "issue_date"=> $request->issuedate,
            "return_date"=> $request->returndate,
            "address"=> $request->address,
            "agreement I"=> $request->agreement_I,
            "agreement II"=> $request->agreement_II,
            "created_at"=> Carbon::now()
        ]);

        $request->session()->forget('cart');

        Mail::to(Auth::user()->email)->send(new OrderShipped());

        return redirect()->action([userOrderController::class, 'userOrder']);
        // return Redirect()->back()->with('success', 'form submitted successfully.');
    }
}
