<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use DB;
use App\Libraries\UploadImagesController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    private   $MediaController;

    public function __construct(UploadImagesController $MediaController)
    {
        $this->MediaController = $MediaController;

    }

    public function create()
    {
        return view('web.auth.register');
    }

    public function beforeRegister()
    {
        return view('auth.beforeregister');
    }

    public function contactus()
    {
        return view('contactus');
    }


    public function joinus()
    {
        $countries = Country::all();
        $cities    = null;
        if (!empty($countries)) {
            $cities = City::select('id', 'name_en', 'name_ar')->where('country_id', $countries[0]->id)->orderBy('name_en')->get();
        }
        $membership     = request()->input('membership');
        $membershipName = '';
        if ($membership) {
            $membershipData = UserMembership::where('id', $membership)->with('user')->first();
            $membershipName = $membershipData->user->full_name;
        }
        return view('auth.joinus', compact('countries', 'cities', 'membership', 'membershipName'));
    }

    public function forgotPost(Request $request)
    {
        $request->validate([
            'email'    => 'required|exists:users,email',
        ]);
        $credentials = $request->only('email');
        $SixDigitRandomNumber = rand(100000,999999);
        $new_password= Hash::make($SixDigitRandomNumber);
        $update= User::where('email', $credentials['email'])->update(['password'=>$new_password]);
        if($update){
            $data['subject']="Reset Password";
            $data['password']=$SixDigitRandomNumber;
            $maill = Mail::to($credentials['email'])->send(new ForgotPassword($data));
        }

        return redirect()->to('/loginForm')->with('message', 'Reset Password is successfully check Your Email');
    }


    public function addUserAddress(Request $request)
    {
        $inputs      = $request->all();
        $currentuser = Auth::user();
        if (!empty($currentuser)) {
          if ($inputs['address_id'] > 0){
              $updateData=$request->only('address','landmark','floor_number','apartment_number','city_id','country_id','area_id','receiver_name','receiver_phone');
               $this->UserService->UserAddressUpdate($inputs['address_id'],$updateData);
               $newAddress = $this->UserService->getUserAddress(['user_addresses.id', '=', $inputs['address_id']]);
          }  else{
            $address                   = new UserAddress();
            $address->user_id          = $currentuser->id;
            $address->address          = $inputs['address'];
            $address->landmark         = $inputs['landmark'];
            $address->receiver_name    = isset($inputs['receiver_name']) ?$inputs['receiver_name'] :$currentuser->full_name;
            $address->receiver_phone   = isset($inputs['receiver_phone']) ?$inputs['receiver_phone'] :$currentuser->phone;
            $address->floor_number     = intval($inputs['floor_number']);
            $address->apartment_number = intval($inputs['apartment_number']);
            $address->city_id          = intval($inputs['city_id']);
            $address->country_id       = intval($inputs['country_id']);
            $address->area_id          = intval($inputs['area_id']);
            $address->save();
            $newAddress = $this->UserService->getUserAddress(['user_addresses.id', '=', $address->id]);
          }


            $response   = [
                'status'  => 200,
                'message' => "address Add Success",
                'data'    => $newAddress[0]
            ];
            return response()->json($response);
        }
        $response = [
            'status'  => 401,
            'message' => "not authorized",
            'data'    => null
        ];
        return response()->json($response);
    }

    public function deleteUserAddress(Request $request)
    {
        $inputs      = $request->all();
        $currentuser = Auth::user();
        if (!empty($currentuser)) {
            $address_id    = $inputs['address_id'];
            $deleteAddress = $this->UserService->deleteUserAddress(['user_addresses.id', '=', $address_id]);
            $response      = [
                'status'  => 200,
                'message' => "address Add Success",
                'data'    => $deleteAddress
            ];
            return response()->json($response);
        }
        $response = [
            'status'  => 401,
            'message' => "not authorized",
            'data'    => null
        ];
        return response()->json($response);
    }

    public function getRegions(Request $request)
    {
        $data['regions'] = Area::select('id', 'region_ar', 'region_en')->where("city_id", $request->city_id)->orderBy('region_en')->get();
        return response()->json($data);
    }

    public function getCities(Request $request)
    {
        $data['cities'] = City::select('id', 'name_en', 'name_ar')->where("country_id", $request->country_id)->orderBy('name_en')->get();
        return response()->json($data);
    }

    function compressImage($source_image, $compress_image)
    {
        $image_info = getimagesize($source_image);
        if ($image_info['mime'] == 'image/jpeg') {
            $source_image = imagecreatefromjpeg($source_image);
            imagejpeg($source_image, $compress_image, 35);             //for jpeg or gif, it should be 0-100
        }
        elseif ($image_info['mime'] == 'image/png') {
            $source_image = imagecreatefrompng($source_image);
            imagepng($source_image, $compress_image, 3);                //for png it should be 0 to 9
        }
        elseif ($image_info['mime'] == 'image/jpg') {
            $source_image = imagecreatefromjpeg($source_image);
            imagejpg($source_image, $compress_image, 35);             //for jpeg or gif, it should be 0-100
        }


        return $compress_image;
    }

    function compressImage2($source_image, $compress_image)
    {
        $image_info = getimagesize($source_image);
        if ($image_info['mime'] == 'image/jpeg' or $image_info['mime'] == 'image/jpg') {
            $source_image = imagecreatefromjpeg($source_image);
            imagejpeg($source_image, $compress_image, 35);             //for jpeg or gif, it should be 0-100
        }
        elseif ($image_info['mime'] == 'image/jpg') {
            $source_image = imagecreatefromjpeg($source_image);
            imagejpg($source_image, $compress_image, 35);             //for jpeg or gif, it should be 0-100
        }
        elseif ($image_info['mime'] == 'image/png') {
            $source_image = imagecreatefrompng($source_image);
            imagepng($source_image, $compress_image, 3);                //for png it should be 0 to 9
        }
        return $compress_image;
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'     => 'required|min:3',
            'email'    => 'required|string|email|max:100|unique:users',
            'password' => 'required|confirmed|min:6',
            'phone'    => 'required|min:11|max:11|unique:users|regex:/[0-9]{11}/',
        ]);
        $data              = $request->only(['name','email','password','phone']);
        $data['password']         = Hash::make($request->input('password'));
        $data['type']         = 'user';
        $user                     = User::create($data);
        if ($user) {
            auth()->login($user);
            session()->flash('message', 'Your account is created');
        }
        return redirect()->to('/my-account')->withSuccess('Your account is created');
    }

    public function joinusPost(Request $request)
    {
        $this->validate(request(), [
            'fname'                => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
            'lname'                => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
            'mname'                => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
            'address'              => 'required|string|max:255',
            'email'                => 'required|string|email|max:100|unique:users',
            'password'             => 'required|min:6',
            'phone'                => 'required|min:11|max:11|unique:users|regex:/(01)[0-9]{9}/',
            'gender'               => 'required',
            'country_id'           => 'required',
            'city_id'              => 'required',
            'area_id'              => 'required',
            'nationality_id'       => 'required|unique:users',
            'parent_membership_id' => 'nullable|exists:user_memberships,id',
            'front_id_image'       => 'required|image',
            'back_id_image'        => 'required|image',
        ]);
        $data                     = $request->all();
        $data['password']         = Hash::make($request->input('password'));
        $data['initial_password'] = $request->input('password');
        $data['address']          = $request->input('address');
        $data['user_type']        = 'member';
        $data['account_id']       = rand(1000000000, 9999999999);
        $data['platform']         = 'web';
        $data['stage']            = '2';
        $data['full_name']        = $this->getFullName($request->get('fname'), $request->get('lname'), $request->get('mname'));
        if (isset($data['front_id_image'])) {
            $data['front_id_image'] = $this->MediaController->UploadImage($data['front_id_image'], 'images/users');
        }
        if (isset($data['back_id_image'])) {
            $data['back_id_image'] = $this->MediaController->UploadImage($data['back_id_image'], 'images/users');
        }
        $user = User::create($data);
        if ($user) {
            $this->sendUserToOracle($user->id);
            $membership = $this->addUserMembership($user->id, $data['parent_membership_id']);
            auth()->login($user);
            session()->flash('message', 'Your account is created');
        }
        return redirect()->to('/memberProfile')->with('message', 'Congratulation Your account is created And Yor membership is # ' . $membership);
    }

    public function updateUser(Request $request)
    {
        $currentuser = Auth::user();
        if (!empty($currentuser)) {
            $this->validate(request(), [
                'fname'          => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
                'lname'          => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
                'mname'          => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
                'address'        => 'required|string|max:255',
                'country_id'     => 'required',
                'city_id'        => 'required',
                'area_id'        => 'required',
                'nationality_id' => 'required|unique:users',
                'front_id_image' => 'required|image',
                'back_id_image'  => 'required|image',
            ]);
            $data              = $request->only(['nationality_id', 'country_id', 'city_id', 'area_id', 'address', 'front_id_image', 'back_id_image']);
            $data['user_type'] = 'member';
            $data['platform']  = 'web';
            $data['stage']     = '2';
            $data['full_name'] = $this->getFullName($request->get('fname'), $request->get('lname'), $request->get('mname'));
            if (isset($data['front_id_image'])) {
                $data['front_id_image'] = $this->MediaController->UploadImage($data['front_id_image'], 'images/users');
            }
            if (isset($data['back_id_image'])) {
                $data['back_id_image'] = $this->MediaController->UploadImage($data['back_id_image'], 'images/users');
            }
            User::where('id', $currentuser->id)->update($data);
            $user = User::where('id', $currentuser->id)->first();
            if (!empty($user)) {
                $this->addUserMembership($user->id, 0);
                auth()->login($user);
                session()->flash('message', 'Your account is updated');
            }
            return redirect()->to('/memberProfile')->withSuccess('Your account is updated');
        }
        return Redirect('/loginPost');
    }

    public function updateUserContactInformation(Request $request)
    {
        $currentuser = Auth::user();
        if (!empty($currentuser)) {
            $this->validate(request(), [
                'fname'    => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
                'lname'    => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
                'mname'    => 'required|string|max:10|regex:/^[a-zA-ZÑñ\s]+$/',
                'email'    => 'required|string|max:255|unique:users,email,' . $currentuser->id,
                'phone'    => 'required|max:11|min:11|regex:/(01)[0-9]{9}/|unique:users,phone,' . $currentuser->id,
                'password' => 'nullable|string|min:6',
            ]);
            $data              = $request->only(['email','phone','password']);
            $data['full_name'] = $this->getFullName($request->get('fname'), $request->get('lname'), $request->get('mname'));

            if (isset($data['password']) && $data['password']) {
                $data['initial_password']=$data['password'];
                $data['password']=Hash::make($data['password']);
            }
            else {
                unset($data['password']);
            }
            User::where('id', $currentuser->id)->update($data);
            $user = User::where('id', $currentuser->id)->first();
            $response = [
                'status'  => 200,
                'message' => "user Update Successfully",
                'data'    => $user
            ];
            return response()->json($response);
        }
        $response = [
            'status'  => 401,
            'message' => "user not authorized",
            'data'    => null
        ];
        return response()->json($response);
    }

    public function updateUserProfileImage(Request $request)
    {
        $currentuser = Auth::user();
        if (!empty($currentuser)) {
            $this->validate(request(), [
                'profile_photo' => 'required|image',
            ]);
            $data = $request->only(['profile_photo']);
            if (isset($data['profile_photo'])) {
                $data['profile_photo'] = $this->MediaController->UploadImage($data['profile_photo'], 'images/users');
            }
            User::where('id', $currentuser->id)->update($data);
            $user     = User::where('id', $currentuser->id)->first();
            $response = [
                'status'  => 200,
                'message' => "user Update Successfully",
                'data'    => $user
            ];
            return response()->json($response);
        }
        $response = [
            'status'  => 401,
            'message' => "user not authorized",
            'data'    => null
        ];
        return response()->json($response);

    }

    public function addUserMembership($user_id, $parent_membership_id = 0)
    {
        $membership = UserMembership::create(['user_id' => $user_id]);
        if (isset($parent_membership_id) && $parent_membership_id > 0) {
            $parentID    = UserMembership::find($parent_membership_id)['user_id'];
            $grandParent = AccountLevel::where(['child_id' => $parentID, 'level' => '1'])->first();
            if (!empty($grandParent)) {
                $levels = [
                    ['parent_id' => $parentID, 'child_id' => $user_id, 'level' => '1', 'created_at' => now(), 'updated_at' => now()],
                    ['parent_id' => $grandParent->parent_id, 'child_id' => $user_id, 'level' => '2', 'created_at' => now(), 'updated_at' => now()],
                ];
            }
            else {
                $levels = [
                    ['parent_id' => $parentID, 'child_id' => $user_id, 'level' => '1', 'created_at' => now(), 'updated_at' => now()],
                ];
            }
            AccountLevel::insert($levels);
        }
        return $membership->id;
    }

    public function getFullName($fname, $lname, $mname)
    {
        $check_names = [
            $fname,
            $lname,
            $mname,
        ];
        foreach ($check_names as $value) {
            if (preg_match('/[اأإء-ي]/ui', $value)) {
                return back()->with('error', 'Please Insert Your Name in  English Format, <br> برجاء ادخال اسمك باللغة الانجليزية فقط');
            }
        }
        $full_name = trim($fname) . " " . trim($mname) . " " . trim($lname);
        $full_name = preg_replace('/\s{2}/s', ' ', $full_name);
        $full_name = ucfirst($full_name);
        return $full_name;
    }

    public function loginForm()
    {
        return view('web.auth.login');
    }
    public function recoverPassword()
    {
        return view('web.auth.recover-password');
    }

    public function signIn(Request $request)
    {

        $request->validate([
            'email'    => 'required|exists:users,email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->to('/my-account')->with('message', 'Signed in Successful');
        }

        return redirect("loginForm")->withErrors('Login details are not valid');
    }

    public function signOut()
    {
        session()->flash('message', 'Your Are signOut');
        Auth::logout();
        return Redirect('/loginForm');
    }

    public function check(Request $request)
    {
        $id             = $request->id;
        $nationality_id = $request->nationality_id;

        $check = User::where('nationality_id', $nationality_id)->exist();
        if ($check) {
            echo 'ok';
        }
        else {
            echo 'no';
        }


    }

    public function sendUserToOracle($user_id)
    {
        $userRow = User::where('id', $user_id)->first();
        // send User To Guzzle
        try {
            $client   = new \GuzzleHttp\Client();
            $data     = [
                'account_id'     => $userRow->account_id,
                'full_name'      => $userRow->full_name,
                'mobile'         => $userRow->phone,
                'nationality_id' => $userRow->nationality_id,
                'address'        => $userRow->address??"9 El sharekat, Opera",
            ];
            $response = $client->request('POST', 'https://sales.atr-eg.com/api/save_user_nettinghub.php', ['form_params' => $data, 'verify' => false]);
            return $response->getBody()->getContents();
///            Log::info($response->getBody()->getContents());

        }
        catch (\Exception $e) {
//            Log::error('sending USER to oracle USER_ID :: '.$userRow->id.' ERROR:: '.$e->getMessage());
            return 'error' . $e->getMessage();
        }
    }

}
