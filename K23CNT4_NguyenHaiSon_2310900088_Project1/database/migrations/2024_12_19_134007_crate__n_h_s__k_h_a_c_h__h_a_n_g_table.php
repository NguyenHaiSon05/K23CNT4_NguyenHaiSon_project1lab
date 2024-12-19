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
        Schema::create('NHS_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('nhsMaKhachHang',255)->unique();
            $table->string('nhsHoTenKhachHang',255);
            $table->string('nhsEmail',255);
            $table->string('nhsMatKhau',255);
            $table->string('nhsDienThoai',255);
            $table->string('nhsDiaChi',255);
            $table->date('nhsNgayDangKy',255);
            $table->tinyInteger('nhsTrangThai');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHS_KHACH_HANG');
    }
};
