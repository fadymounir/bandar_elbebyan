<?php

namespace App\Models\User;


use App\Models\Location\District;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAddress extends Model
{
    protected $table    = 'user_addresses';
    protected $fillable = [
        'user_id',
        'district_id',
        'street',
        'building_no',
        'is_default'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id');
    }


    public static function getUserAddressListInFormat(int $userId)
    {
        return self::join('districts', 'districts.id', 'user_addresses.district_id')
            ->join('cities', 'cities.id', 'districts.city_id')
            ->join('areas', 'areas.id', 'cities.area_id')
            ->where('user_id', $userId)
            ->select([
                'areas.name_ar              as area_ar',
                'areas.name_en              as area_en',
                'cities.name_ar             as city_ar',
                'cities.name_en             as city_en',
                'districts.name_ar          as district_ar',
                'districts.name_en          as district_en',
                'user_addresses.street      as street',
                'user_addresses.building_no as building_no',
                'user_addresses.is_default  as is_default'
            ]);
    }

}
