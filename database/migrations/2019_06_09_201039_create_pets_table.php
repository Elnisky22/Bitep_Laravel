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
        //Schema::drop('pets');

        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nome');
            $table->string('especie');
            $table->string('genero');
            $table->string('raca');
            $table->string('dataNascimento');
            $table->string('observacao');           
            $table->bigInteger('dono_id')->unsigned();
                        
            //https://stackoverflow.com/questions/32954424/laravel-migration-array-type-store-array-in-database-column
        
            $table->timestamps();
        });
    
        Schema::table('pets', function($table) {
            $table->foreign('dono_id')->references('id')->on('usuarios');
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
