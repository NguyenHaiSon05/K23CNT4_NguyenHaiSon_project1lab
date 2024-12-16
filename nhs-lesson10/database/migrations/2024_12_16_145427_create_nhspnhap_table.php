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
        Schema::create('nhsctpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nhsSoPN')->priamry();
            $table->date('nhsNgayNhap');
            $table->string('nhsSoDH',100);
            //foreign
            $table->foreign('nhsSoDH')->references('nhsSoDH')->on('nhsdondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhsctpnhap');
    }
};
