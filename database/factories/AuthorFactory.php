<?php
namespace Database\Factories;


use App\Models\Author;
use App\Models\Country;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class AuthorFactory extends Seeder
{
    /**
     * Run the database seeds.
     */
//    public function run(): void
//    {
//
//        $faker = Faker::create();
//
//        foreach (range(1,10) as $index){
//            Author::create([
//                'first_name' => $faker->firstName(),
//                'last_name' => $faker->lastName(),
//                'birth_date' => $faker->date(),
//                'country_id_fk' => $faker->numberBetween(1,9),
//            ]);
//        }
//    }
    public function definition():array{
        $faker = Faker::create();
        return [
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'birth_date' => $faker->date(),
            'country_id_fk' => Country::factory(),
        ];
    }
}
