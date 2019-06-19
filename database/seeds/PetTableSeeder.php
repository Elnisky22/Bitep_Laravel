<?php

use Illuminate\Database\Seeder;

class PetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //$imagens = array(1,2,3,4);

        //$imagens_id = serialize($imagens);
        //$imagens_id = ($imagens);
        
        
        DB::insert ('insert into pets (nome,especie,genero,raca,dataNascimento,observacao,dono_id)
        values(?,?,?,?,?,?,?)',
        array('Surubim','Cachorro','M','vira-lata','2019-01-01','pescador',1));

    }
}
