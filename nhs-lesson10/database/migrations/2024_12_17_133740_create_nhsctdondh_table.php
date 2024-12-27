ctdondh


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
        Schema::create('nhsctdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nhsSoDH');
            $table->string('nhsMaVTu');
            $table->integer('nhsSlDat');
            // Tạo khóa chính trên 2 cột (nhsSoDH, nhsMaVTu)
            $table->primary(['nhsSoDH','nhsMaVTu']);
            // Khóa ngoại
            $table->foreign('nhsSoDH')->references('nhsSoDH')->on('nhsdondh');
            $table->foreign('nhsMaVTu')->references('nhsMaVTu')->on('nhsvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhsctdondh');
    }
};
