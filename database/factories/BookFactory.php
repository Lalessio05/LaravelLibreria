<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Publisher;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{

    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'title' => $faker->sentence(),
            'publication_year' => $faker->year(),
            'author_id_fk' => Author::factory(),
            'publisher_id_fk' => Publisher::factory(),
            'genre_id_fk' => Genre::factory(),
            'ISBN' => $faker->isbn13(),
        ];
    }
}
