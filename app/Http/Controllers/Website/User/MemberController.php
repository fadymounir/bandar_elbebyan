<?php

namespace App\Http\Controllers\Website\User;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{


    public function __construct()
    {

    }

    public function index()
    {
        $addresses = null;
        $currentuser = Auth::user();
        if (!empty($currentuser)) {
            return view('web.user.my-account');
        }
        return Redirect('/login');
    }

}
