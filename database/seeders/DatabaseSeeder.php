<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crea 5 country con 3 autori l'una
        Country::factory()
            ->count(5)
            ->hasAuthors(3)
            ->create();
    }
}
