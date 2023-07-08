<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Dashboard;
use App\Http\Requests\Admin\CreateAdmin;
use App\Http\Requests\User\UpdateUser;
use App\Models\Location\District;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DistrictController extends Dashboard
{
    public function getCityDistricts(Request $request)
    {
        $cityDistricts = District::where('city_id', $request->get('cityId'))->get()->toArray();
        return $this->getJsonSuccessResponse("", $cityDistricts);
    }
}
