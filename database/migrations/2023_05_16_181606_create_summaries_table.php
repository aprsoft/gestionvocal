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
        Schema::create('summaries', function (Blueprint $table) {
            $table->id();                   
            $table->unsignedBigInteger('parent_id')->nullable();             
            $table->unsignedBigInteger('expense_id')->nullable();            
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('cliente')->nullable();
            $table->text('detalle')->nullable();
            $table->unsignedInteger('folio')->nullable(); 
            $table->unsignedInteger('typedocument_id')->nullable(); 
            // $table->enum('type',['AVISO DE COBRO','NOTA DE VENTA','NOTA DE COMPRA','ORDEN DE COMPRA','ORDEN DE TRABAJO','COMPROBANTE','NOTA DE EGRESO','NOTA DE INGRESO','COMPROBANTE VUELTO','VALE'])->nullable();
            $table->enum('estado_documento',['VIGENTE','NO VIGENTE'])->nullable();
            $table->enum('condicion_documento',['PAGADO','PENDIENTE','MOROSO','CONVENIO','ABONO|MOROSO','CONDONADO'])->nullable();                
            $table->integer('neto')->nullable();  
            $table->integer('iva')->nullable(); 
            $table->integer('total')->nullable(); 
            $table->integer('saldo')->nullable();  
            $table->date('fecha_cobro')->nullable();   
            $table->date('fecha_pago')->nullable();        
            $table->timestamps(); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summaries');
    }
};
