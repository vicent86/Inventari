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
        Schema::create('venta__detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('producto_id');
            $table->decimal('precio_producto',8,2);
            $table->integer('cantidad');
            $table->unsignedInteger('venta_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta__detalles');
    }
};
