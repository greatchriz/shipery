<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $item_addresses =  \App\Models\ItemAddress::factory(80)->create();

      // item_addresses_count

      $item_addresses_count = count($item_addresses);




     $items = \App\Models\Item::factory(100)->create(
        [
          'sender_address_id' => rand(1, $item_addresses_count),
          'receiver_address_id' => rand(1, $item_addresses_count),
        ]
      );

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
