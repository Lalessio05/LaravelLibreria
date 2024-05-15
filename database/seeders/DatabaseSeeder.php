<?php

namespace Database\Seeders;

use Database\Factories\AutoriGenerator;
use Database\Factories\CaseEditriciGenerator;
use Database\Factories\GeneriGenerator;
use Database\Factories\LibriGenerator;
use Database\Factories\NazioniGenerator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            NazioniGenerator::class,
            CaseEditriciGenerator::class,
            GeneriGenerator::class,
            AutoriGenerator::class,
            LibriGenerator::class,
        ]);
    }
}
