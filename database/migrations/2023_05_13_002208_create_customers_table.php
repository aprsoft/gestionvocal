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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('giro')->nullable();        
            $table->string('nombres');
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->string('direccion')->nullable();
            $table->string('comuna')->nullable(); 
            $table->string('ciudad')->nullable(); 
            $table->string('telefono_fijo')->nullable(); 
            $table->string('telefono_movil')->nullable();            
            $table->string('email')->nullable();
            $table->enum('tipo',['Socio','Cliente'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
