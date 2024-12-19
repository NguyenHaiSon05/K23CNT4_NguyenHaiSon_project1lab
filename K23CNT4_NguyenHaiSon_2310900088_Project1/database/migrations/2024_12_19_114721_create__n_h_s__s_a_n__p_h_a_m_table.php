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
        Schema::create('NHS_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nhsMaSanPham',255)->unique();
            $table->string('nhsTenSanPham',255);
            $table->string('nhsHinhAnh');
            $table->integer('nhsSoLuong');
            $table->float('nhsDonGia');
            $table->bigInteger('nhsMaLoai')->references('id')->on('NHS_LOAI_SAN_PHAM');
            $table->tinyInteger('nhsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHS_SAN_PHAM');
    }
};
