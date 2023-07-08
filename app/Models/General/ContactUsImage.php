<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactUsImage extends Model
{
    protected $table    = 'contact_us_images';
    protected $fillable = [
        'contact_id',
        'path',
    ];

    public function contact(): BelongsTo
    {
        return $this->belongsTo(ContactUs::class, 'contact_id');
    }
}
