<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::drop('imagens');

        Schema::create('imagens', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->binary('imagem');
            
            $table->timestamps();
        });
    }

    //https://laracasts.com/discuss/channels/laravel/what-is-datatype-for-image

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagens');
    }
}
