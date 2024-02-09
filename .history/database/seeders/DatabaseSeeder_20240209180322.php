<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;


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

        // call item tracking event seeder class
        $this->call(ItemTrackingEventSeeder::class);
    }
}
