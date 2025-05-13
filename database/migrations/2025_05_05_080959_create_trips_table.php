<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->unsignedBigInteger('tikets_types_id');
            $table->unsignedBigInteger('transport_id');

            $table->foreign('card_id')
            ->references('id')
            ->on('cards')->onDelete('cascade');

            $table->foreign('tikets_types_id')
            ->references('id')
            ->on('tiket__types')->onDelete('cascade');

            $table->foreign('transport_id')
            ->references('id')
            ->on('transports')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
