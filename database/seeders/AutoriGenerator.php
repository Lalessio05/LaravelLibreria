<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autore;
use Faker\Factory as Faker;

class AutoriGenerator extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //nome,cognome,idNazione_fk
        $faker = Faker::create();

        foreach (range(1,10) as $index){
            Autore::create([
                'nome' => $faker->firstName(),
                'cognome' => $faker->lastName(),
                'dataNascita' => $faker->date(),
                'idNazione_fk' => $faker->numberBetween(1,9),
            ]);
        }
    }
}
