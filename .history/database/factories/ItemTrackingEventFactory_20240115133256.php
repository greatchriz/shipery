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


        return [
            'item_id' => rand(1, $itemCount),
            'title' => fake()->sentence(),
            'location' => fake()->city() . ', ' . fake()->country(),
            'start_datetime' => fake()->dateTime(),
        ];
    }

}

