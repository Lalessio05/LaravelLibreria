<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Publisher;
use App\Models\User;
use App\Models\User2;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Author::factory(10)->create();
//        Country::factory(9)->create();
//        Publisher::factory(9)->create();
        Genre::factory(9)->create();
//        Book::factory(50)->create();
//        User2::factory(10)->create();

    }
}
