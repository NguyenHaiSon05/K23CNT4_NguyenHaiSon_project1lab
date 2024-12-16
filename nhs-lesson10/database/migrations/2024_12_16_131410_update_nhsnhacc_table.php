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
        Schema::create('nhsnhacc', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nhsMaNCC')->primary();
            $table->string('nhsTenNCC');
            $table->string('nhsDiaChi');
            $table->string('nhsDienThoai');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhsnhacc');
    }
};
