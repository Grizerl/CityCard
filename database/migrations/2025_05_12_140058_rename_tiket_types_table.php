<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('tiket__types', 'ticket__types');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('ticket__types', 'tiket__types');
    }
};
