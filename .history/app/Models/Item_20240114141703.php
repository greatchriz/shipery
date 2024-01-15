<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function sender()
    {
        return $this->belongsTo(Sender::class);
    }

    public function receiver()
    {
        return $this->belongsTo(Receiver::class);
    }

    public function trackingEvents()
    {
        return $this->hasMany(ItemTrackingEvent::class);
    }

}
