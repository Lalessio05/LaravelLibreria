<?php

namespace Database\Factories;

use App\Models\Country;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class CountryFactory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1,9) as $index) {
            Country::create([
                'name' => $faker->country(),
            ]);

        }
    }
    public function definition():array{
        $faker = Faker::create();
        return [
            'name' => $faker->country(),
        ];
    }
}
