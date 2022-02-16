<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class issuebook extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $fillable = [
        'fullname',
        'orderId',
        'phno',
        'email',
        'issue_date',
        'return_date',
        'address',
        'agreement I',
        'agreement II'
    ];

}
