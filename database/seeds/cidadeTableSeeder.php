<?php

use Illuminate\Database\Seeder;

class cidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'app/Dev_docs/cidades.sql';
        DB::unprepared(file_get_contents($path));
    }
}
