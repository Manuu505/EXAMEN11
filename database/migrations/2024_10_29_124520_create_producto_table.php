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
        Schema::create('producto', function (Blueprint $table) {
            $table->id('cod_producto');
            $table->string('nom_producto');
            $table->string('desc_producto');
            $table->decimal('pre_producto');
            $table->foreignId('cod_categoria')->constrained('categoria','cod_categoria')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('cod_proveedor')->constrained('proveedor','cod_proveedor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
