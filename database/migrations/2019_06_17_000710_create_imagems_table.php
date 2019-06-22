<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagems', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('extencao')->nullable(false);
            $table->bigInteger('pet_id')->unsigned();
            $table->timestamps();
        });

        //migrations não tem mediumblob e largeblob nativamente
        DB::statement("ALTER TABLE imagems ADD imagem MEDIUMBLOB NOT NULL");

        Schema::table('imagems', function($table) {
            $table->foreign('pet_id')
                ->references('id')
                ->on('pets')
                ->onDelete('cascade'); //referencia da tabela pet.
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
        Schema::dropIfExists('imagems');
    }
}
