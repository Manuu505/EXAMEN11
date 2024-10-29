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
        Schema::create('reporte', function (Blueprint $table) {
            $table->id('cod_reporte');
            $table->foreignId('cod_producto')->constrained('producto','cod_producto')->onDelete('cascade')->onUpdate('cascade');
            $table->date('fech_reporte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reporte');
    }
};
