<?php

namespace App\Http\Requests\UserAddress;

use App\Traits\validationCommon;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserAddress extends FormRequest
{
    use validationCommon;

    public function rules()
    {
        return [
            'user_address_id' => 'required|exists:users,id',
            'area_id'         => 'required|exists:areas,id',
            'city_id'         => 'required|exists:cities,id',
            'district_id'     => 'required|exists:districts,id',
            'street'          => 'required|min:3',
            'building_no'     => 'required|min:1',
            'is_default'      => 'required|in:1,0',
        ];
    }

    public function messages()
    {
        return [
            'user_address_id.required' => 'المستخدم مطلوب',
            'user_address_id.exists'   => 'المستخدم غير موجود',
            'area_id.required'         => 'المنطقة مطلوبة',
            'area_id.exists'           => 'المنطقة غير موجودة',
            'city_id.required'         => 'المدينة مطلوبة',
            'city_id.exists'           => 'المدينة غير موجودة',
            'district_id.required'     => 'الحي مطلوب',
            'district_id.exists'       => 'الحي غير موجود',
            'street.required'          => 'الشارع مطلوب',
            'street.min'               => 'الشارع علي الاقل ثلاثة احرف',
            'building_no.required'     => 'رقم المبني مطلوب',
            'building_no.min'          => 'رقم المبني علي الاقل حرف',
            'is_default.required'      => 'العنوان الرئيسي مطلوب',
            'is_default.in'            => 'العنوان الرئيسي يجب ان يكون نعم او لا',
        ];
    }
}
