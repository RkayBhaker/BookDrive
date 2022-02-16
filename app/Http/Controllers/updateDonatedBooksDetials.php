<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\donated_Book;
use App\Models\User;
use App\Models\order;
use App\Models\BannerImages;
use Illuminate\Support\Facades\Auth;

class updateDonatedBooksDetials extends Controller
{
    function index(){
        $All_Data = Donated_Book::all();
        return view('admin.Donated-Books-Collections', ['all_data' => $All_Data]);
    }
    //
    function updateForm(Request $request){
        donated_Book::insert([
            "title" => $request->title,
            "sub_title" => $request->sub_title,
            "desc" => $request->desc,
            "status" => $request->status,
            "category" => $request->category,
            "Language" => $request->lang,
            "board" => $request->board,
            "token" => $request->token,
            "created_at" => carbon::now()
        ]);
        return redirect()->back()->with('success', 'form submitted');
    }
    
    function userDetails(){
        $all_users = User::all();
        return view('admin.User-display', ['all_users'=> $all_users]);
    }

    function allOrders(){
        $all_users = Order::all();
        return view('admin.all-orders', ['all_users'=> $all_users]);
    }
    function adminPanel(){
        $userType = Auth::User()->userType;
        // echo $userType;
        if($userType === 1){
            return view('admin.layouts.layout-dashboard');
        }else{
            return view('welcome');
        }

    }
    function getBannerImages(){
        // $all_banner = BannerImages::all();
        $all_banner = BannerImages::get(['image_name']);

        // print_r($all_banner);
        // echo $all_banner;
        // $banner_arr = [];
        // array_push($banner_arr, $all_banner);

        return view('admin.Banner-Update', ['all_banner'=> $all_banner]);
    }

    function getBannerImagesForRoot(){
        $all_banner = BannerImages::get(['image_name']);

        // $banner = new BannerImages();
        // print_r($banner->get(['image_name']));

        return view('welcome', ['all_banner'=> $all_banner]);
        // return view('welcome', ['all_banner'=> $banner->get(['image_name'])]);
    }
    function updateBanner(Request $request)
    {
        $validateData = $request->validate([
            "image_name" => "required|mimes:jpg,jpeg,png"
        ],
        [
            "image_name" => "Please insert Image in correct format"
        ]);


        $original_name = $request->file('image_name');
        $gen_unique = hexdec(uniqid());
        $img_ext = strtolower($original_name->getClientOriginalExtension());
        $img_name = $gen_unique.'-banner'.'.'.$img_ext;
        $location = 'images/';
        $last_img = $location.$img_name;
        $original_name -> move($location, $img_name);

        // echo $last_img;

        BannerImages::insert([
            'image_name' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success', 'image uploaded successfully');
    }
}