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
        Schema::table('transports', function (Blueprint $table): void {
            $table->unsignedBigInteger('city_id')->after('transport_number');
            $table->foreign('city_id')->references('id')->on('transports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transports', function (Blueprint $table): void {
            $table->dropForeign(['city_id']);
            $table->dropColumn('city_id');
        });
    }
};
