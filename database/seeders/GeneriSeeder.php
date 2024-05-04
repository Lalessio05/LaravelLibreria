<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genere;


class GeneriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generi = [
            ['nome' => 'Fantasy'],
            ['nome' => 'Romanzo'],
            ['nome' => 'Thriller']
        ];

        foreach ($generi as $genere) {
            Genere::create($genere);
        }
    }
}
