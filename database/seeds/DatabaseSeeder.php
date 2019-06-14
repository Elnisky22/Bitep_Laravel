<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        //$this->call('estadoTableSeeder');
        //$path = 'app/Dev_docs/estados.sql';
        //DB::unprepared(file_get_contents($path));

        //$this->call('cidadeTableSeeder');
        //$path = 'app/Dev_docs/cidades.sql';
        //DB::unprepared(file_get_contents($path));
    }
}
