<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class ItemTrackingEvent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function getFormattedStartDateAttribute()
    {
        return Carbon::parse($this->start_datetime)->format('M d, Y');
    }

    public function getFormattedStartTimeAttribute()
    {
        return Carbon::parse($this->start_datetime)->format('h:i a');
    }

    // echo $event->formatted_start_date;

}

