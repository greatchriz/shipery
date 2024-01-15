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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('image_src');
            $table->string('tracking_number');
            $table->foreignId('sender_address_id')->constrained('item_addresses');
            $table->foreignId('receiver_address_id')->constrained('item_addresses');
            $table->enum('shipment_type', ['domestic', 'international']);
            $table->integer('weight');
            $table->enum('status', ['in_system', 'picked_up', 'in_transit', 'dispatched', 'delivered']);
            $table->date('shipped_on')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
