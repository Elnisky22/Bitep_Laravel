<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert ('insert into usuarios (nome,email,created_at,senha,telefone,cidade_id)
        values(?,?,?,?,?,?)',
        array('Admin','admin@admin','2019-01-01','123456','42999999999',2895));
    }
}
