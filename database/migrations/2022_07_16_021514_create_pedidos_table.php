<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Fecha');
            $table->string('Cliente');
            $table->integer('Numero_articulos');
            $table->integer('Codigo_Articulo');
            $table->string('Nombre_Articulo');
            $table->float('Sub_total');
            $table->float('IVA');
            $table->float('Valor_total');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
