<?php

namespace Database\Factories;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookFactory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Book::create([
                'title' => $faker->title(),
                'publication_year' => $faker->year(),
                'author_id_fk' => $faker->numberBetween(1, 10),
                'publisher_id_fk' => $faker->numberBetween(1, 9),
                'genre_id_fk' => $faker->numberBetween(1, 9),
                'ISBN' => $faker->isbn13(),
            ]);
        }
    }
}
