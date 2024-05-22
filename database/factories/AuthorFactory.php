<?php

namespace Database\Factories;


use App\Models\Country;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class AuthorFactory extends Factory
{

    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'birth_date' => $faker->date(),
            'country_id' => Country::factory(),
        ];
    }
}
