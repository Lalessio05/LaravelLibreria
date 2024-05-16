<?php

namespace Database\Factories;

use App\Models\Publisher;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class PublisherFactory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,9) as $index) {
            Publisher::create([
                'name' => $faker->company,
                'foundation_date' => $faker->date(),
            ]);
        }
    }
}
