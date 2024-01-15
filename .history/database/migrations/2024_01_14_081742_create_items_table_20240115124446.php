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
            $table->string('image_src')->nullable();
            $table->string('tracking_number');
            $table->foreignId('sender_id')->constrained('senders');
            $table->foreignId('receiver_id')->constrained('receivers');
            $table->enum('shipment_type', ['domestic', 'international']);
            $table->integer('weight');
            $table->enum('status', ['picked_up', 'in_transit', 'delivered']);
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
