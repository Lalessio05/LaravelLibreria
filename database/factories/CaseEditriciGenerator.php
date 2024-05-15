<?php

namespace Database\Factories;

use App\Models\CasaEditrice;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class CaseEditriciGenerator extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,9) as $index) {
            CasaEditrice::create([
                'nome' => $faker->company,
                'dataFondazione' => $faker->date(),
            ]);
        }
    }
}
