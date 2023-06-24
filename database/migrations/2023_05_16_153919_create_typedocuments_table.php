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
        Schema::create('typedocuments', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedInteger('codigo');
            $table->enum('tipo',['TRIBUTARIO','INTERNO']);
            $table->enum('condicion',['INGRESO','EGRESO','AJUSTE'])->nullable();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('typedocuments');
    }
};
