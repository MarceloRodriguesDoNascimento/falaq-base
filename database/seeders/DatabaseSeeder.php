<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
<<<<<<< HEAD
=======
            EventoSeeder::class,
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
            PerguntaSeeder::class,
        ]);
    }
}
