<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Setting;
use App\Models\General\ContactUs;
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
        $sub_categories=Category::where('is_home','1')->take(5)->get();
        return view('welcome',compact('sub_categories'));
    }
    public function about()
    {
        $aboutUsCoverAttachment=Setting::where("key_name","aboutUsCoverAttachment")->first();
        $aboutUsTitle=Setting::where("key_name","aboutUsTitle")->first();
        $aboutUsDetails=Setting::where("key_name","aboutUsDetails")->first();

        return view('web.about',compact('aboutUsTitle','aboutUsCoverAttachment','aboutUsDetails'));
    }
    public function contact()
    {

        $faceBookLink=Setting::where("key_name","faceBookLink")->first();
        $twitterLink=Setting::where("key_name","twitterLink")->first();
        $instagramLink=Setting::where("key_name","instagramLink")->first();
        $snapChatLink=Setting::where("key_name","snapChatLink")->first();
        $tikTokLink=Setting::where("key_name","tikTokLink")->first();
        $youtubeLink=Setting::where("key_name","youtubeLink")->first();
        $workingTime=Setting::where("key_name","workingTime")->first();
        $phoneNumber=Setting::where("key_name","phoneNumber")->first();
        $email=Setting::where("key_name","email")->first();
        $taxNumber=Setting::where("key_name","taxNumber")->first();
        $commercialRegistrationNumber=Setting::where("key_name","commercialRegistrationNumber")->first();
        $addressDetails=Setting::where("key_name","addressDetails")->first();
        $locationGoogleMapLink=Setting::where("key_name","locationGoogleMapLink")->first();

        return view('web.contact',compact('workingTime','taxNumber','locationGoogleMapLink','addressDetails','commercialRegistrationNumber','email','phoneNumber','faceBookLink','twitterLink','instagramLink','snapChatLink','snapChatLink','tikTokLink','youtubeLink'));
    }
    public function contactRequest(Request $request)
    {
        $this->validate(request(), [
            'name'     => 'required|min:3',
            'email'    => 'required|string|email|max:100|unique:users',
            'phone'    => 'required|min:9|max:9|unique:users|regex:/[0-9]{9}/',
            'notes'    => 'required|string',
        ],[
            'email.unique' => 'This Email Address Is Already Used By Another User',
            'name.min' => 'The Name must be at least :min charts',
            'phone.min' => 'The phone must be at least :min Numbers',
        ]);
        $data                  = $request->only(['name','email','notes','phone']);
        $data['phone']         = '966'.$request->input('phone');
        $data['contact_type']  = 'contact_us';
        $contactRequest        = ContactUs::create($data);

        return redirect()->back()->with('success', 'your message send successfully');
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
