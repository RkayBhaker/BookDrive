<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donated_Book;

class bookDetialsController extends Controller
{
    //
    function ncertBook(){
        $cat_I_hi = donated_Book::all()
        ->where('category', 'CAT-I')
        ->where('Language', 'Hi')->first();

        $I_left_no_books_hi = donated_Book::all()
        ->where('category', 'CAT-I')
        ->where('Language', 'Hi')
        ->where('status', true)->count();
        // 

        $cat_I_eng = donated_Book::all()
        ->where('category', 'CAT-I')
        ->where('Language', 'Eng')->first();

        $I_left_no_books_en = donated_Book::all()
        ->where('category', 'CAT-I')
        ->where('Language', 'Eng')
        ->where('status', true)->count();

        // 

        $cat_II_hi = donated_Book::all()
        ->where('category', 'CAT-II')
        ->where('Language', 'Hi')->first();

        $II_left_no_books_hi = donated_Book::all()
        ->where('category', 'CAT-II')
        ->where('Language', 'Hi')
        ->where('status', true)->count();
        // 

        $cat_II_eng = donated_Book::all()
        ->where('category', 'CAT-II')
        ->where('Language', 'Eng')->first();
        
        $II_left_no_books_en = donated_Book::all()
        ->where('category', 'CAT-II')
        ->where('Language', 'Eng')
        ->where('status', true)->count();
        // 

        // $data = donated_Book::take(1)->first();

        return view('IssueNCERTbook', [
            'data' => $cat_I_hi,
            'data1' => $cat_I_eng,
            'data2' => $cat_II_hi,
            'data3' => $cat_II_eng,
            'I_left_no_books_hi' => $I_left_no_books_hi,
            'I_left_no_books_en' => $I_left_no_books_en,
            'II_left_no_books_hi' => $II_left_no_books_hi,
            'II_left_no_books_en' => $II_left_no_books_en
        ]);

    }
}
