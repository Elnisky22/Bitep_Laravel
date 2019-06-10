<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //Schema::drop('usuarios');
        //->
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->date('datacadastro');
            $table->string('email');
            $table->string('nome');
            $table->string('senha');
            $table->string('telefone');            
            $table->bigInteger('cidade_id')->unsigned();
            
            $table->timestamps();
        });

        Schema::table('usuarios', function($table) {
            $table->foreign('cidade_id')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('usuarios');
    }
}
