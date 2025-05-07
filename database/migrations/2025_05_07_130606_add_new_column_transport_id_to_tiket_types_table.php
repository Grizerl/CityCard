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
        Schema::table('tiket__types', function (Blueprint $table) {
            $table->unsignedBigInteger('transport_id')->after('price');
            $table->foreign('transport_id')->references('id')->on('transports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tiket__types', function (Blueprint $table) {
            $table->dropForeign(['transport_id']);
            $table->dropColumn('transport_id');
        });
    }
};
