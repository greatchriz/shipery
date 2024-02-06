<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function setShippedOnAttribute($value)
    {
        $this->attributes['shipped_on'] = \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }


    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('M d, Y');
    }


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
