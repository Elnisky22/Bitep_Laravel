<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::drop('estados'); -> serve para dropar a tabela e caso de alteração, evita erros SE ja estiver sido criada.

        Schema::create('estados', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nome');
            
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
        Schema::dropIfExists('estados');
    }
}
