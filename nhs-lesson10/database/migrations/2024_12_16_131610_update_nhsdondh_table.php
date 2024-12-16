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
        Schema::create('nhsdondh', function (Blueprint $table) {
           //$table->id();
            //$table->timestamps();
            $table->string('nhsSoDH')->primary();
            $table->string('nhsNgayDH');
            $table->string('nhsMaNCC');
            $table->foreign('nhsMaNCC')->references('nhsMaNCC')->on('nhsnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhsdondh');
    }
};
