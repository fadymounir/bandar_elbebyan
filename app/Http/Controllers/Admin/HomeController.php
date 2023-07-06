<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;

class HomeController extends Dashboard
{
    public function index(Request $request)
    {
        return view('admin.subviews.home.index');
    }
}
