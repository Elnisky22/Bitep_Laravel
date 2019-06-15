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
        
        
        DB::insert ('insert into pets (nome,genero,especie,raca,dataNascimento,observacao,dono_id)
        values(?,?,?,?,?,?,?)',
        array('Surubim','M','Cachorro','vira-lata','2019-01-01','pescador',1));

    }
}
