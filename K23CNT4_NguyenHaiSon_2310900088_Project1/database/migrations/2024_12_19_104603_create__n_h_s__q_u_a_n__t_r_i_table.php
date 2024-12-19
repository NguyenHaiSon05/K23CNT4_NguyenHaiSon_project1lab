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
        Schema::create('NHS_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('nhsTaiKhoan',225)->unique();
            $table->string('nhsMatKhau',255);
            $table->tinyInteger('nhsTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHS_QUAN_TRI');
    }
};
