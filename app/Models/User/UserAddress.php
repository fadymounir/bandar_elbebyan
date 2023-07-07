<?php

namespace App\Models\User;


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
}
