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

        // $table->string('title');
        // $table->string('location')->nullable();
        // $table->datetime('start_datetime');


        $itemCount = \App\Models\Item::count();


        return [

            'item_id' => rand(1, $itemCount),
            'location' => fake()->city() . ', ' . fake()->country(),
            'start_datetime' => fake()->dateTime(),
        ];
    }

}

