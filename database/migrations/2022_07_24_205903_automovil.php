<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Automovil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('automoviles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('marca', 20);
            $table->string('modelo', 20);
            $table->string('placa', 6)->unique();
            $table->string('puestos', 2);
            $table->unsignedInteger('id_conductor');
            $table->foreign('id_conductor')->references('id')->on('conductores')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps(); //created_At updated_At
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('automovil');
    }
}
