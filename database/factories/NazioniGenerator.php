<?php

namespace Database\Factories;

use App\Models\Nazione;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class NazioniGenerator extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1,9) as $index) {
            Nazione::create([
                'nome' => $faker->country(),
            ]);
        }
    }
}
