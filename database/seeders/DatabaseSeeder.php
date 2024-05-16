<?php

namespace Database\Seeders;

use Database\Factories\AuthorFactory;
use Database\Factories\CountryFactory;
use Database\Factories\PublisherFactory;
use Database\Factories\GenreFactory;
use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            PublisherFactory::class,
            CountryFactory::class,
            GenreFactory::class,
            AuthorFactory::class,
            BookFactory::class,
        ]);
    }
}
