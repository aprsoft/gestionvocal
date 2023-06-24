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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('rut');
            $table->string('giro')->nullable();
            $table->string('direccion')->nullable();
            $table->string('razon_social');
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable(); 
            $table->enum('tipo_empresa',['E.I.R.L','SPA','Por definir'])->nullable();          
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
