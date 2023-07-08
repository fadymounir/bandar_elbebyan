<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table    = 'contact_us';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'notes',
        'contact_type',
    ];
}
