<?php

namespace Database\Seeders;

use App\Models\Location\Area;
use App\Models\Location\City;
use App\Models\Location\District;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AreaCityDistrictInsert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area_json = json_decode(Storage::get('static_data/areas.json'),true);
        Area::insert($area_json);

        $cities_json = json_decode(Storage::get('static_data/cities.json'),true);
        City::insert($cities_json);

        $district_json = json_decode(Storage::get('static_data/districts.json'), true);
        District::insert($district_json);

    }
}
