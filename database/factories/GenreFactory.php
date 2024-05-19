<?php

namespace Database\Factories;


use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class GenreFactory extends Factory
{

    private array $genres = [
        'Fantasy',
        'Science Fiction',
        'Mystery',
        'Thriller',
        'Romance',
        'Western',
        'Dystopian',
        'Contemporary',
        'Historical Fiction',
        'Horror',
        'Non-Fiction',
        'Memoir',
        'Biography',
        'Self-Help',
        'Health',
        'Travel',
        'Guide',
        'Families & Relationships',
        'Humor',
        'Children’s'
    ];

    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'name' => $faker->randomElement($this->genres),
        ];
    }
}
