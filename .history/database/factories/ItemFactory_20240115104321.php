<?php

namespace Database\Factories;

use App\Models\Receiver;
use App\Models\Sender;
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
            'image_src' => '/img/1.jpg',
            'tracking_number' => fake()->bothify('##########'),
            'sender_id' => fake()->numberBetween(1, 100),
            'receiver_id' => fake()->numberBetween(1, 100),
            'shipment_type' => fake()->randomElement(['domestic', 'international']),
            'weight' => fake()->randomFloat([0.1, 2.0]),
            'status' => fake()->randomElement(['in_system', 'picked_up', 'in_transit', 'dispatched', 'delivered']),
            'shipped_on' => fake()->date(),
        ];

    }
}
