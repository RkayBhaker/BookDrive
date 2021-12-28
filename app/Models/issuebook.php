<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issuebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_category',
        'book_set',
        'fullname',
        'phno',
        'email',
        'issue_date',
        'return_date',
        'address',
        'agreement I',
        'agreement II'
    ];

}
