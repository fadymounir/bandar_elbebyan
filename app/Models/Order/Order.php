<?php

namespace App\Models\Order;

use App\Models\User;
use App\Models\User\UserAddress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $table    = "orders";
    protected $fillable = [
        'user_id',
        'address_id',
        'products_fees',
        'products_total',
        'delivery_fees',
        'total',
        'status',
        'payment_type',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function address():BelongsTo
    {
        return $this->belongsTo(UserAddress::class,'address_id');
    }
}
