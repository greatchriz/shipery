<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $addressTotal = \App\Models\ItemAddress::count();

        return [
            'tracking_number' => fake()->bothify('##########'),

            'sender_address_id' => rand(1, $addressTotal),
            'receiver_address_id' => rand(1, $addressTotal),
            'shipment_type' => fake()->randomElement(['domestic', 'international']),
            'weight' => fake()->numberBetween(1, 1000),
            'status' => fake()->randomElement(['in_system', 'picked_up', 'in_transit', 'dispatched', 'delivered']),
            'shipped_on' => fake()->date(),
        ];

    }
}
