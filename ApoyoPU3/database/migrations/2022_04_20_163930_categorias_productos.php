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
        Schema::create('categorias_productos', function(Blueprint $table){
            $table->foreignId('usuarios_id') ->constrained('usuarios');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('producto_id')->constrained('productos');
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
