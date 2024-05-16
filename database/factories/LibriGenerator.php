<?php

namespace Database\Factories;

use App\Models\Libro;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

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
                'idAutore_fk' => $faker->numberBetween(1, 10),
                'idCasaEditrice_fk' => $faker->numberBetween(1, 9), 
                'idGenere_fk' => $faker->numberBetween(1, 9),
                'ISBN' => $faker->isbn13(),
            ]);
        }
    }
}
