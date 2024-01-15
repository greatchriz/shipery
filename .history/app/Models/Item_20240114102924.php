<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function senderAddress()
    {
        return $this->belongsTo(ItemAddress::class, 'sender_address_id');
    }

    public function receiverAddress()
    {
        return $this->belongsTo(ItemAddress::class, 'receiver_address_id');
    }

    public function trackingEvents()
    {
        return $this->hasMany(ItemTrackingEvent::class);
    }

}
