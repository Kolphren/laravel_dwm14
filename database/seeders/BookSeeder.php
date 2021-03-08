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
            'title' => 'Everworld',
            'author' => 'Truc',
            'description' => 'Un monde trop bizarre',
            'publication_year' => '2000',
            'genre' => 'Fantastique',
            'pages_nb' => '400'
            ],
            [
                'title' => 'Epée de vérité',
                'author' => 'Truc',
                'description' => 'Un monde trop bizarre',
                'publication_year' => '2000',
                'genre' => 'Fantastique',
                'pages_nb' => '400'
            ],
            [
                'title' => 'LOTR',
                'author' => 'Truc',
                'description' => 'Un monde trop bizarre',
                'publication_year' => '2000',
                'genre' => 'Fantastique',
                'pages_nb' => '400'
            ],
        ]);
    }
}
