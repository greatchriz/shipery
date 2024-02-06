<?php

namespace App\Observers;

use App\Models\Item;
use Illuminate\Support\Str;

class ItemObserver
{
    /**
     * Handle the Item "created" event.
     */
    public function created(Item $item)
    {
        $string = "DF56REVS346BKP4";  // Initial string
        $id = (string) ($item->id);              // Example ID value

        // Calculate the required number of characters to remove from the end of $string
        $charactersToRemove = min(Str::length($id), Str::length($string));

        // Remove the necessary characters from the end of $string
        $string = substr($string, 0, -$charactersToRemove);

        // Append the $id value to the modified $string
        $string .= $id;

        // Ensure the final string has exactly 15 characters
        $string = Str::substr($string, 0, 15);  // Truncate if necessary
        $item->tracking_number = $string;
        $item->save();

        // return back
        return $item;}

    /**
     * Handle the Item "updated" event.
     */
    public function updated(Item $item): void
    {
        //
    }

    /**
     * Handle the Item "deleted" event.
     */
    public function deleted(Item $item): void
    {
        //
    }

    /**
     * Handle the Item "restored" event.
     */
    public function restored(Item $item): void
    {
        //
    }

    /**
     * Handle the Item "force deleted" event.
     */
    public function forceDeleted(Item $item): void
    {
        //
    }
}
