<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class CountryFactory extends Factory
{
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'name' => $faker->country(),
        ];
    }
}
