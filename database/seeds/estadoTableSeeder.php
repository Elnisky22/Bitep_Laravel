<?php

use Illuminate\Database\Seeder;

class estadoTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $path = 'app/Dev_docs/estados.sql';
        DB::unprepared(file_get_contents($path));
    }
}
