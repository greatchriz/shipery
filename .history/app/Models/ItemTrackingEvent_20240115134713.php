<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTrackingEvent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

}

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    // ...

    public function getFormattedStartDateTimeAttribute()
    {
        return Carbon::parse($this->start_datetime)->format('M d, Y   h:i a');
    }
}

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    // ...

    public function getFormattedStartDateTimeAttribute()
    {
        return Carbon::parse($this->start_datetime)->format('M d, Y   h:i a');
    }
}$event = Event::find(1);

echo $event->formatted_start_datetime;namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    // ...

    public function getFormattedStartDateAttribute()
    {
        return Carbon::parse($this->start_datetime)->format('M d, Y');
    }
}$event = Event::find(1);

echo $event->formatted_start_date;
