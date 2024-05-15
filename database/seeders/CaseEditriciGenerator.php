<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CasaEditrice;


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
