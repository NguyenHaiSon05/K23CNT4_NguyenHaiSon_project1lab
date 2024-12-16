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
        Schema::create('nhsvattu', function (Blueprint $table) {
            //$table->id();
            $table->string('nhsMaVTu')->primary();
            $table->string('nhsTenVTu')->unique();
            $table->string('nhsDvTinh');
            $table->float('nhsPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhsvattu');
    }
};
