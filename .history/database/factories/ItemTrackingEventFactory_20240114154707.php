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

        return [

            'item_id' => rand(1, $itemCount),
            'location_a' => $locationA,
            'location_b' => $locationB,
            'location_c' => $locationC,
            'period_a' => fake()->randomNumber(1, 10),
            'period_b' => fake()->randomNumber(1, 10),
            'is_current_location' => fake()->randomKey([0, 1]),
            'event_description' => fake()->sentence(),
        ];
    }

}

