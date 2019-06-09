<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dataregistro');
            $table->string('especie');
            $table->string('genero');
            $table->string('nome');
            $table->string('raca');
            $table->string('observacao');
            $table->integer('dono_id');
            // relações?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pets');
    }
}
