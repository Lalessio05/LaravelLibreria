<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genere;
use Faker\Factory as Faker;



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
