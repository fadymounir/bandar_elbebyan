<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sub_categories=Category::whereNotNull('category_id')->take(5)->get();
        return view('welcome',compact('sub_categories'));
    }
    public function about()
    {
        $settings=Setting::select('');
        return view('web.about');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function getAllCategories()
    {
        $data     = Category::whereNull('category_id')->with("sub_categories")->get();
        $response = [
            'status'  => 200,
            'message' => "All products",
            'data'    => $data
        ];
        return response()->json($response);
    }
}
