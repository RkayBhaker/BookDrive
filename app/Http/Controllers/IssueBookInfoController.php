<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueBookInfoController extends Controller
{
    //

    public function getBookInfo(Request $request){

        $accessBookData = [];

        $boardInfo = $request->board;
        $categoryInfo = $request->category;
        $standardInfo = $request->standard;
        $rememberToken = $request->rememberToken;

        array_push($accessBookData, $boardInfo);
        array_push($accessBookData, $categoryInfo);
        array_push($accessBookData, $standardInfo);
        array_push($accessBookData, $rememberToken);

        // print_r($accessBookData);

        // return view('IssueBookform', [
        //     'accessBookData' => $accessBookData
        // ]);

    }
}
