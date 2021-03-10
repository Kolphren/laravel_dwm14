<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Disque-monde',
                'author_id' => 3,
                'description' => 'Un monde trop bizarre',
                'publication_year' => 2000,
                'genre' => 'Fantastique',
                'pages_nb' => 400
            ],
            [
                'title' => 'Epée de vérité',
                'author_id' => 1,
                'description' => 'Un monde trop bizarre',
                'publication_year' => '2000',
                'genre' => 'Fantastique',
                'pages_nb' => 400
            ],
            [
                'title' => 'LOTR',
                'author_id' => 2,
                'description' => 'Un monde trop bizarre',
                'publication_year' => 2000,
                'genre' => 'Fantastique',
                'pages_nb' => 400
            ],
        ]);
    }
}
