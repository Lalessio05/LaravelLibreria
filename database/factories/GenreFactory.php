<?php
namespace Database\Factories;


use App\Models\Genre;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class GenreFactory extends Seeder
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
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range (1,9) as $index){
            Genre::create([
                'name' => $faker->name(),
            ]);
        }
    }
    public function definition():array{
        $faker = Faker::create();
        return [
            'name' => $faker->randomElement($this->genres),
        ];
    }
}
