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


        // call sender seeder class
        $this->call(SenderSeeder::class);

        // call receiver seeder class
        $this->call(ReceiverSeeder::class);

        // call item seeder class
        $this->call(ItemSeeder::class);

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
