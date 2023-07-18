<?php

namespace App\Http\Requests\Area;

use App\Traits\validationCommon;
use Illuminate\Foundation\Http\FormRequest;

class CreateArea extends FormRequest
{
    use validationCommon;

    public function rules()
    {
        return [
            'name_ar' => 'required|min:3',
            'name_en' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name_ar.required' => 'الاسم مطلوب',
            'name_ar.min'      => 'الاسم علي الاقل ثلاثة احرف',
            'name_en.required' => 'الاسم مطلوب',
            'name_en.min'      => 'الاسم علي الاقل ثلاثة احرف',
        ];
    }
}
