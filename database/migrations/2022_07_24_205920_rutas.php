<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('rutas', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_automovil');
            $table->foreign('id_automovil')->references('id')->on('automoviles')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('lugar_inicio', 50);
            $table->string('lugar_fin', 50);
            $table->timestamp('hora_fecha_salida');
            $table->string('puestos_disponibles');
            $table->timestamps(); //created_At updated_At
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('rutas');
    }
}
