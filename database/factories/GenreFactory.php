<?php
namespace Database\Factories;


use App\Models\Genre;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class GenreFactory extends Seeder
{
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
}
