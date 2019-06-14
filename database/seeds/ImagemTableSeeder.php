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


        $imagem = $_FILES['C:\\Imagem']['imagem1'];
        $tamanho= $_FILES['imagem']['size'];

        if($imagem != 'none'){
            $file = fopen($imagem,"rb");
            $conteudo = fread($fp,$tamanho);
            $conteudo = addslashes($conteudo);
            fclose($file);
        }
        
        DB::insert ('insert into imagens (imagem) values (?)', array($conteudo));
        
        /*
        $imagens_id = array(1,2,3);
        DB::insert ('insert into pets (dataNascimento,especie,genero,nome,raca,observacao,dono_id,imagem_id) 
                     values (?,?,?,?,?,?,?)'),
        array('2019-01-01','cachorro','M','Surubim','vira-lata','Pescador',1,$imagens_id);
        */
    }
}
