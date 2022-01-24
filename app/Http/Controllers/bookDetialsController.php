<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donated_Book;

class bookDetialsController extends Controller
{
    //
    function ncertBook(){

        $NCERT_data = [];
        $NCERT_total_book = [];

        // NCERT
        $sortArrayData = array(
            0 => array(
                0 => "CAT-I",
                1 => "Hi",
                2 => "ncert"
            ),
            1 => array(
                0 => "CAT-II",
                1 => "Hi",
                2 => "ncert"
            ),
            2 => array(
                0 => "CAT-III",
                1 => "Hi",
                2 => "ncert"
            ),
            3 => array(
                0 => "CAT-IV",
                1 => "Hi",
                2 => "ncert"
            )
        );

        
        foreach($sortArrayData as $data){
                $all_sorted_data = donated_Book::all()
                ->where('category', $data[0])
                ->where('Language', $data[1])
                ->where('board', $data[2])
                ->where('status', true)
                ->first();

                $all_total_book = donated_Book::all()
                ->where('category', $data[0])
                ->where('Language', $data[1])
                ->where('board', $data[2])
                ->where('status', true)
                ->count();

                if($all_sorted_data != null){
                    array_push($NCERT_data, $all_sorted_data);
                    array_push($NCERT_total_book, $all_total_book);
                }
        }

        // print_r($NCERT_total_book);
        

        // echo '<hr>';

        // print_r($NCERT_data);

        // foreach($NCERT_data as $value){
        //     echo json_encode($value, JSON_PRETTY_PRINT);
        // }

        // print_r(count($NCERT_data));

        // foreach($NCERT_data as $value){
        //     $id = 0;
        //     if($value->status === 1){
        //         if($value->category === $value->category){
        //             $id++;
        //         }
        //         echo $id;
        //         echo '<br>';
        //         echo $NCERT_data['title'];
        //         echo '<br>';
        //         echo $value['status'];
        //         echo '<br>';
        //         echo $value['token'];
        //         echo '<hr>';

        //     }
        // }

        return view('IssueNCERTbook', [
            'NCERT_data' => $NCERT_data,
            'NCERT_total_book' => $NCERT_total_book
        ]);

    }

    //
    function cbseBook(){

        $CBSE_data = [];
        $CBSE_total_book = [];

        // CBSE
        $sortArrayData = array(
            0 => array(
                0 => "CAT-I",
                1 => "Eng",
                2 => "cbse"
            ),
            1 => array(
                0 => "CAT-II",
                1 => "Eng",
                2 => "cbse"
            ),
            2 => array(
                0 => "CAT-III",
                1 => "Eng",
                2 => "cbse"
            ),
        );

        
        foreach($sortArrayData as $data){
                $all_sorted_data = donated_Book::all()
                ->where('category', $data[0])
                ->where('Language', $data[1])
                ->where('board', $data[2])
                ->first();

                $all_total_book = donated_Book::all()
                ->where('category', $data[0])
                ->where('Language', $data[1])
                ->where('board', $data[2])
                ->where('status', true)
                ->count();

                array_push($CBSE_data, $all_sorted_data);
                array_push($CBSE_total_book, $all_total_book);
        }

        return view('IssueCBSEbook', [
            'CBSE_data' => $CBSE_data,
            'CBSE_total_book' => $CBSE_total_book
        ]);

    }
}
