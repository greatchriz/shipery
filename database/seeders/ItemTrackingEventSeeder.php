<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemTrackingEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = \App\Models\Item::all();

        foreach ($items as $item) {
            \App\Models\ItemTrackingEvent::factory()->count(10)->create([
                'item_id' => $item->id
            ]);
        }
    }
}
