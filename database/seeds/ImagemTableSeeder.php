<?php

use Illuminate\Database\Seeder;

class ImagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$imagem = $_FILES['C:\\Imagem']['imagem1'];
        //$tamanho= $_FILES['imagem']['size'];

        $imagem = file_get_contents("public\images\petbanguela.jpg");
        
        DB::insert ('insert into imagens (imagem) values (?)', array($imagem));

    }
}
