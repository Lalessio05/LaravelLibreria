<?php
namespace Database\Factories;


use App\Models\Genere;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class GeneriGenerator extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range (1,9) as $index){
            Genere::create([
                'nome' => $faker->name(),
            ]);
        }
    }
}
