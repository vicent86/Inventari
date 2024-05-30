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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->text('descripcion')->max(400);
            $table->string('image_uri',255)->nullable();
            $table->string('content_uri',255);
            $table->string('pdf_uri',255);
            $table->decimal('precio',8,2);
            $table->unsignedInteger('categoria_id');
            $table->boolean('estado');
            $table->unsignedInteger('id_proveedor');
            $table->decimal('iva',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
