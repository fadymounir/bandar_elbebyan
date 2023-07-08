<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Dashboard;
use App\Http\Requests\User\CreateUser;
use App\Http\Requests\User\UpdateUser;
use App\Http\Requests\UserAddress\CreateUserAddress;
use App\Http\Requests\UserAddress\UpdateUserAddress;
use App\Models\Location\District;
use App\Models\Order\Order;
use App\Models\User;
use App\Models\User\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserAddressController extends Dashboard
{
    public function createUserAddress(CreateUserAddress $request)
    {
        if ($request->get('is_default') == 1) {
            UserAddress::where('user_id', $request->get('user_address_id'))->update(['is_default' => 0]);
        }
        UserAddress::create([
            'user_id'     => $request->get('user_address_id'),
            'district_id' => $request->get('district_id'),
            'street'      => $request->get('street'),
            'building_no' => $request->get('building_no'),
            'is_default'  => $request->get('is_default'),
        ]);

        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function getUserAddressInfo(Request $request)
    {
        $userAddress = UserAddress::getUserAddressListInFormat($request->get('userId'));
        return \view('admin.subviews.users.components.userAddressComponents', ['userAddress' => $userAddress])->render();
    }

    public function deleteUserAddress(Request $request)
    {
        $checkExistInOrder = Order::where('address_id', $request->get('addressId'))->count();

        if ($checkExistInOrder >= 1) {
            return response()->json(['Status' => 410, 'Message' => 'لا يمكن اتمام لعملية الحذف حيث ان العنوان مرتبط بطلبات']);
        }

        UserAddress::find($request->get('addressId'))->delete();

        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }

    public function getUserAddressDetails(Request $request)
    {
        $userAddress                  = UserAddress::find($request->get('userAddressId'));
        $data['selected_area_id']     = $userAddress->district->city->area_id;
        $data['selected_city_id']     = $userAddress->district->city->id;
        $data['selected_district_id'] = $userAddress->district_id;
        $data['user_address_data']    = $userAddress->toArray();

        return $this->getJsonSuccessResponse("", $data);
    }

    public function updateUserAddress(UpdateUserAddress $request)
    {
        if ($request->get('is_default') == 1) {
            UserAddress::where('user_id', UserAddress::find($request->get('address_id'))->user_id)->update(['is_default' => 0]);
        }
        UserAddress::find($request->get('address_id'))->update([
            'district_id' => $request->get('district_id'),
            'street'      => $request->get('street'),
            'building_no' => $request->get('building_no'),
            'is_default'  => $request->get('is_default'),
        ]);

        return $this->getJsonSuccessResponse(__('admin.you_operation_is_done_successfully'));
    }
}
