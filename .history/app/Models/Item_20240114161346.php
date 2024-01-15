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

    // method that will return only current location
    public function currentLocationEvents()
    {
        return $this->trackingEvents()->where('is_current_location', true)->get();
    }

    // method that will return only past location
    public function pastLocationEvents()
    {
        return $this->trackingEvents()->where('is_current_location', false)->get();
    }

}
