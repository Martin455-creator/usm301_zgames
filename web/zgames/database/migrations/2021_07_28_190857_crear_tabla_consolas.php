<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaConsolas extends Migration
{
    
     
     
      @return void
     
    public function up()
    {
        Schema::create('consolas', function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->string("hora");
            $table->integer("medidor");
            $table->integer("direccion");
            $table->integer("valor");
            $table->integer("tipo");
            $table->timestamps(); 
        });
    }

    
     
     
      @return void
     
    public function down()
    {
        Schema::dropIfExists('consolas');
    }
}