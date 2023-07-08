<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Dashboard;
use App\Http\Requests\Admin\CreateAdmin;
use App\Http\Requests\User\UpdateUser;
use App\Models\Location\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CityController extends Dashboard
{


    public function getAreaCities(Request $request)
    {
        $cities = City::where('area_id', $request->get('areaId'))->get()->toArray();
        return $this->getJsonSuccessResponse("", $cities);
    }

}
