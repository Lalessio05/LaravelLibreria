<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Libro;

class LibriGenerator extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Libro::create([
                'titolo' => $faker->title(),
                'annoPubblicazione' => $faker->year(),
                'idAutore_fk' => $faker->numberBetween(1, 10), // Sostituisci con l'intervallo corretto di ID degli autori
                'idCasaEditrice_fk' => $faker->numberBetween(1, 9), // Sostituisci con l'intervallo corretto di ID delle case editrici
                'idGenere_fk' => $faker->numberBetween(1, 9), // Sostituisci con l'intervallo corretto di ID dei generi
                'ISBN' => $faker->isbn13(),
            ]);
        }
    }
}