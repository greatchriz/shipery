<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemAddress extends Model
{
    use HasFactory;

    protected $guarded = [];

    // i have sender_address_id and receiver_address_id in the items table how can i add the relationship here?

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
