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
            $table->string('nhsSoPN');
            $table->string('nhsMaVTu');
            $table->integer('nhsSlNhap');
            $table->float('nhsDgNhap');
            //primary
            $table->primary(['nhsSoPN','nhsMaVTu']);
            //Foreign
            $table->foreign('nhsSoPN')->references('nhsSoPN')->on('nhspnhap');
            $table->foreign('nhsMaVTu')->references('nhsMaVTu')->on('nhsvattu');
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
