<?php

namespace Database\Factories;

use App\Models\ItemTrackingEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemTrackingEvent>
 */
class ItemTrackingEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $itemCount = \App\Models\Item::count();
        $locationA = fake()->city() . ', ' . fake()->country();
        $locationB = fake()->city() . ', ' . fake()->country();
        $locationC = fake()->city() . ', ' . fake()->country();
        $item_id = rand(1, $itemCount);
        $currentLocation = fake()->randomElements([true, false]);

        return [

            // $table->foreignId('item_id')->constrained('items');
            // $table->string('location_a')->nullable();
            // $table->string('location_b')->nullable();
            // $table->string('location_c')->nullable();
            // $table->string('period_a')->nullable();
            // $table->string('period_b')->nullable();
            // $table->string('event_description')->nullable();
            // $table->boolean('is_current_location')->default(false);
            'item_id' => $item_id,
            'location_a' => $locationA,
            'location_b' => $locationB,
            'location_c' => $locationC,
            'period_a' => fake()->randomNumber(1, 10),
            'period_b' => fake()->randomNumber(1, 10),
            'is_current_location' => $this->checkCurrentLocation($currentLocation),
            'event_description' => fake()->sentence(),
        ];
    }

    // public function checkCurrentLocation($currentLocation)
    // {
    //     //if currentLocation is true

    //     //get all item tracking events where item_id is same as the item_id and check if any of them has iscurrent_location as true

    //     // if it returns true return
    //     // then return false

    //     //if it returns false
    //     //then return true
    // }

    public function checkCurrentLocation($currentLocation)
    {
        // Get all item tracking events where item_id is the same as the item_id
        $events = ItemTrackingEvent::where('item_id', $this->item_id)->get();

        // Check if any of the events has iscurrent_location as true
        foreach ($events as $event) {
            if ($event->is_current_location) {
                return false;
            }
        }

        return true;
    }

}

