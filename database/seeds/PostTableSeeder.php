<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
        [
            'titolo' => 'Notizia 1',
            'descrizione' => 'Questa è la notizia numero 1',
            'user_id' => '1'
        ],
        [
            'titolo' => 'Notizia 2',
            'descrizione' => 'Questa è il post numero 2',
            'user_id' => '1'
        ],
        [
            'titolo' => 'Notizia 3',
            'descrizione' => 'Questo è il 3°',
            'user_id' => '1'
        ],
        [
            'titolo' => 'Notizia 10',
            'descrizione' => 'Questa è la decima notizia del secondo utente',
            'user_id' => '2'
        ],
        [
            'titolo' => 'Notizia 20',
            'descrizione' => 'Questa è la ventesima invece',
            'user_id' => '2'
        ],
        [
            'titolo' => 'Notizia vecchia',
            'descrizione' => 'Questa è una vecchia notizia in archivio. Del secondo utente',
            'user_id' => '2'
        ],
        [
            'titolo' => 'Notizia Nuova',
            'descrizione' => 'Questa è l\'ultima notizia del primo utente',
            'user_id' => '1'
        ]
        ]);
    }
}
