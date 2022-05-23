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
        Schema::create('productos', function(Blueprint $table){
            $table->id();
            $table->string("nombre",50);
            $table->string("descripcion",200)->nullable();
            $table->float("precio",8,2);
            $table->string("imagen",100)->nullable();
            $table->tinyInteger("concesionado");
            $table->string("motivo",100);
            $table->integer("existencia");
            $table->integer("pendientes");
            $table->integer("porcentajeManejo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
