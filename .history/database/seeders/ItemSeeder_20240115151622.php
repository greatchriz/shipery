<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = \App\Models\Item::factory(70)->create([
            'sender_id' => \App\Models\Sender::all()->random()->id,
            'receiver_id' => \App\Models\Receiver::all()->random()->id
        ]);

    }
}
