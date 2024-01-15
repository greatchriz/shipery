<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sender;
use App\Models\Item;
use App\Models\Receiver;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $senders = Sender::factory(80)->create();

        $receivers = Receiver::factory(80)->create();


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
