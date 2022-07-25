<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pqrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pqrs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('correo', 50);
            $table->string('asunto', 50);
            $table->text('mensaje');
            $table->timestamps(); //created_At updated_At
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pqrs');
    }
}
