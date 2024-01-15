<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_tracking_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('items');
            $table->string('location_a')->nullable();
            $table->string('location_b')->nullable();
            $table->string('location_c')->nullable();
            $table->string('period_a')->nullable();
            $table->string('period_b')->nullable();
            $table->string('event_description')->nullable();
            $table->boolean('is_current_location')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_tracking_events');
    }
};
