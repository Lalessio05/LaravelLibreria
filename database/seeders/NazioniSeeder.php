<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nazione;

class NazioniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nazioni = [
            ['nome' => 'Italia'],
            ['nome' => 'Stati Uniti'],
            ['nome' => 'Regno Unito']
        ];

        foreach ($nazioni as $nazione) {
            Nazione::create($nazione);
        }
    }
}
