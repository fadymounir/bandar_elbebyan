<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table="areas";

    protected $fillable=[
        'name_ar',
        'name_en'
    ];

}
