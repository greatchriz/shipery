<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function items()
    {
        return $this->hasOne(Item::class);
    }
}
