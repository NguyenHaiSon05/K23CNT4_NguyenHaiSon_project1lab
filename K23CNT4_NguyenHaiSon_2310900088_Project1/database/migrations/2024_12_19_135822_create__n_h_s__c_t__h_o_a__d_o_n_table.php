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
        Schema::create('NHS_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nhsHoaDonID')->refernces('id')->on('NHS_HOA_DON');
            $table->bigInteger('nhsSanPhamID')->refernces('id')->on('NHS_SAN_PHAM');
            $table->integer('nhsSoLuongMua');
            $table->float('nhsDonGiaMua');
            $table->float('nhsThanhTien');
            $table->tinyInteger('nhsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHS_CT_HOA_DON');
    }
};
