<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ItemAddress;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\ItemAddress::factory(80)->create();

        $itemAddresses = \App\Models\ItemAddress::all();

        foreach ($itemAddresses as $itemAddress) {
            $itemAddress->items()->createMany(
                \App\Models\Item::factory(5)->make([
                    'sender_address_id' => fake()->numberBetween(1, 80),
                    'receiver_address_id' => fake()->numberBetween(1, 80),
                ])->toArray()
            );
        }


        $items = \App\Models\Item::all();

        //use the items trackingEvents relationship to create tracking events
        foreach ($items as $item) {
            $item->trackingEvents()->createMany(
                \App\Models\ItemTrackingEvent::factory(5)->make()->toArray()
            );
        }
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
