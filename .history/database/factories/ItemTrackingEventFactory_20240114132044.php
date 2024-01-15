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

        return [

            'item_id' => rand(1, $itemCount),
            'location_a' => $locationA,
            'location_b' => $locationB,
            'location_c' => $locationC,
            'period_a' => fake()->randomNumber(1, 10),
            'period_b' => fake()->randomNumber(1, 10),
            'is_current_location' => $this->checkCurrentLocation($item_id),
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

    public function checkCurrentLocation($item_id)
    {
        $events = ItemTrackingEvent::where('item_id', $item_id)->get();

        if ($events->isEmpty()) {
            return true;
        }

        foreach ($events as $event) {
            if ($event->is_current_location) {
                return false;
            }
        }

        return true;
    }

}

