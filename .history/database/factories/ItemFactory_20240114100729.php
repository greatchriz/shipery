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
        return [
            'tracking_number' => fake()->bothify('##########'),
            //sender_address_id will be a random even numbers between 1 and 40 it must not use faker library
            'sender_address_id' => rand(1, 40) * 2,
            //receiver_address_id will be a random odd numbers between 1 and 40 it must not use faker library
            'receiver_address_id' => rand(1, 40) * 2 + 1,
            'shipment_type' => fake()->randomElement(['domestic', 'international']),
            'weight' => fake()->numberBetween(1, 1000),
            'status' => fake()->randomElement(['in_system', 'picked_up', 'in_transit', 'dispatched', 'delivered']),
            'shipped_on' => fake()->date(),
        ];

    }
}
