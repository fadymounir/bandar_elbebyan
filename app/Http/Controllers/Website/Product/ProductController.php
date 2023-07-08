<?php

namespace App\Http\Controllers\Website\Product;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{


    public function __construct()
    {

    }

    public function index()
    {
        return view('web.product.products');
    }

}
