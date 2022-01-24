<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userOrderController extends Controller
{
    //
    function userOrder(){

        $userToken = Auth::user()->userToken;

        $orderArr = order::all()
        ->where('userToken', $userToken);

        return view('order', [
            'orders' => $orderArr
        ]);

    }

}
