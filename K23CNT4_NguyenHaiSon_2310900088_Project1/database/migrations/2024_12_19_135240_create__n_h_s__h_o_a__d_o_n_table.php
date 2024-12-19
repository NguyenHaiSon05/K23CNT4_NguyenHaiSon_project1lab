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
        Schema::create('NHS_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('nhsHoaDon')->unique();
            $table->bigInteger('nhsMaKhachHang')->references('id')->on('NHS_KHACH_HANG');
            $table->date('nhsNgayHoaDon');
            $table->string('nhsHoTenKhachHang',255);
            $table->string('nhsEmail',255);
            $table->string('nhsDienThoai',255);
            $table->string('nhsDiaChi',255);
            $table->float('nhsTongTriGia');
            $table->tinyInteger('nhsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHS_HOA_DON');
    }
};
