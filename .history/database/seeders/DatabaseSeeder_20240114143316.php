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




        $items = \App\Models\Item::factory(100)->create();

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
