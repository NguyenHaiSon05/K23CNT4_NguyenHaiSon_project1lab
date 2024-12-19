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
        Schema::create('NHS_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nhsMaLoai',255)->unique();
            $table->string('nhsTenLoai',255);
            $table->tinyInteger('nhsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHS_LOAI_SAN_PHAM');
    }
};
