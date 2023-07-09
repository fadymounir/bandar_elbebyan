<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Dashboard;
use App\Http\Requests\Admin\CreateAdmin;
use App\Http\Requests\Area\CreateArea;
use App\Http\Requests\Area\UpdateArea;
use App\Http\Requests\User\UpdateUser;
use App\Models\Location\Area;
use App\Models\Location\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CityController extends Dashboard
{
    public function index(Request $request, $area_id)
    {
        if (\request()->ajax()) {
            $cities = City::query()->where('area_id', $area_id);
            return datatables($cities)
                ->addColumn('name_ar', function ($city) {
                    return $this->viewContent('span', [
                        'content' => $city->name_ar
                    ]);
                })
                ->addColumn('name_en', function ($city) {
                    return $this->viewContent('span', [
                        'content' => $city->name_en
                    ]);
                })
                ->addColumn('districts', function ($city) {
                    return $this->viewContent('ahref', [
                        'content' => __('admin.district'),
                        'class'   => 'btn btn-primary',
                        'path'    => route('admin.districts.index', ['area_id'=>$city->area_id,'city_id' => $city->id])
                    ]);
                })
                ->addColumn('is_active', function ($city) {
                    return $this->viewContent('span', [
                        'content'      => $city->is_active ? __('admin.is_active') : __('admin.dis_active'),
                        'class'        => $city->is_active ? 'btn btn-primary activation' : 'btn btn-danger activation',
                        'free_content' => 'data-id="' . $city->id . '"'
                    ]);
                })
                ->addColumn('update', function ($city) {
                    return $this->viewContent('span', [
                        'content'      => __('admin.update') . '<i class="fa fa-user-edit"></i>',
                        'class'        => 'btn btn-primary editCity',
                        'free_content' => 'data-id="' . $city->id . '"'
                    ]);
                })
                ->make();
        }
        return view('admin.subviews.cities.index', [
            'area' => Area::find($area_id)
        ]);
    }

    public function createCity(CreateArea $request, $area_id)
    {
        City::create([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'area_id' => $area_id
        ]);
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function getCityInfo(Request $request)
    {
        return $this->getJsonSuccessResponse("", City::find($request->get('cityId'))->toArray());
    }

    public function updateCity(UpdateArea $request, $area_id)
    {
        City::find($request->get('city_id'))->update([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'area_id' => $area_id
        ]);
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function activationCity(Request $request)
    {
        $city            = City::find($request->get('cityId'));
        $city->is_active = !$city->is_active;
        $city->save();
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function getAreaCities(Request $request)
    {
        $cities = City::where('area_id', $request->get('areaId'))->get()->toArray();
        return $this->getJsonSuccessResponse("", $cities);
    }

}
