<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Dashboard;
use App\Http\Requests\Area\CreateArea;
use App\Http\Requests\Area\UpdateArea;
use App\Models\Location\Area;
use Illuminate\Http\Request;

class AreaController extends Dashboard
{
    public function index(Request $request)
    {
        if (\request()->ajax()) {
            $areas = Area::query();
            return datatables($areas)
                ->addColumn('name_ar', function ($area) {
                    return $this->viewContent('span', [
                        'content' => $area->name_ar
                    ]);
                })
                ->addColumn('name_en', function ($area) {
                    return $this->viewContent('span', [
                        'content' => $area->name_en
                    ]);
                })
                ->addColumn('cities', function ($area) {
                    return $this->viewContent('ahref', [
                        'content' => __('admin.cities'),
                        'class'   => 'btn btn-primary',
                        'path'    => route('admin.cities.index', ['area_id' => $area->id])
                    ]);
                })
                ->addColumn('is_active', function ($area) {
                    return $this->viewContent('span', [
                        'content'      => $area->is_active ? __('admin.is_active') : __('admin.dis_active'),
                        'class'        => $area->is_active ? 'btn btn-primary activation' : 'btn btn-danger activation',
                        'free_content' => 'data-id="' . $area->id . '"'
                    ]);
                })
                ->addColumn('update', function ($area) {
                    return $this->viewContent('span', [
                        'content'      => __('admin.update') . '<i class="fa fa-user-edit"></i>',
                        'class'        => 'btn btn-primary editArea',
                        'free_content' => 'data-id="' . $area->id . '"'
                    ]);
                })
                ->make();
        }
        return view('admin.subviews.areas.index');
    }

    public function createArea(CreateArea $request)
    {
        Area::create([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
        ]);
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function getAreaInfo(Request $request)
    {
        return $this->getJsonSuccessResponse("", Area::find($request->get('areaId'))->toArray());
    }

    public function updateArea(UpdateArea $request)
    {
        Area::find($request->get('area_id'))->update([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
        ]);
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function activationArea(Request $request)
    {
        $area            = Area::find($request->get('areaId'));
        $area->is_active = !$area->is_active;
        $area->save();
        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }
}
