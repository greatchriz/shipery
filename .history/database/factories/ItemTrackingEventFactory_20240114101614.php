<?php

namespace Database\Factories;

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
        return [
            'item_id' => rand(1, $itemCount),
            'location_city' => fake()->city(),
            'location_state' => fake()->stateAbbr(),
            'location_country' => fake()->countryCode(),
            'event_description' => fake()->sentence(),
        ];
    }
}
