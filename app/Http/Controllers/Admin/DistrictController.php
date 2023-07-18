<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Dashboard;
use App\Http\Requests\Admin\CreateAdmin;
use App\Http\Requests\Area\CreateArea;
use App\Http\Requests\Area\UpdateArea;
use App\Http\Requests\User\UpdateUser;
use App\Models\Location\Area;
use App\Models\Location\City;
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

    public function index(Request $request, $area_id, $city_id)
    {
        if (\request()->ajax()) {
            $districts = District::query()->where('city_id', $city_id);
            return datatables($districts)
                ->addColumn('name_ar', function ($district) {
                    return $this->viewContent('span', [
                        'content' => $district->name_ar
                    ]);
                })
                ->addColumn('name_en', function ($district) {
                    return $this->viewContent('span', [
                        'content' => $district->name_en
                    ]);
                })
                ->addColumn('is_active', function ($district) {
                    return $this->viewContent('span', [
                        'content'      => $district->is_active ? __('admin.is_active') : __('admin.dis_active'),
                        'class'        => $district->is_active ? 'btn btn-primary activation' : 'btn btn-danger activation',
                        'free_content' => 'data-id="' . $district->id . '"'
                    ]);
                })
                ->addColumn('update', function ($district) {
                    return $this->viewContent('span', [
                        'content'      => __('admin.update') . '<i class="fa fa-user-edit"></i>',
                        'class'        => 'btn btn-primary editDistrict',
                        'free_content' => 'data-id="' . $district->id . '"'
                    ]);
                })
                ->make();
        }
        return view('admin.subviews.districts.index', [
            'area' => Area::find($area_id),
            'city' => City::find($city_id)
        ]);
    }

    public function createDistrict(CreateArea $request, $area_id, $city_id)
    {
        District::create([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'city_id' => $city_id
        ]);
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function getDistrictInfo(Request $request)
    {
        return $this->getJsonSuccessResponse("", District::find($request->get('districtId'))->toArray());
    }

    public function updateDistrict(UpdateArea $request, $area_id, $city_id)
    {
        District::find($request->get('district_id'))->update([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
        ]);
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function activationDistrict(Request $request)
    {
        $district            = District::find($request->get('districtId'));
        $district->is_active = !$district->is_active;
        $district->save();
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

}
