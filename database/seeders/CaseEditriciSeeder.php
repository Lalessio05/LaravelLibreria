<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CasaEditrice;


class CaseEditriciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caseEditrici = [
            ['nome' => 'Mondadori', 'dataFondazione' => '1907-01-01'],
            ['nome' => 'Penguin Random House', 'dataFondazione' => '2013-07-01'],
            ['nome' => 'HarperCollins', 'dataFondazione' => '1989-11-01']
        ];

        foreach ($caseEditrici as $casaEditrice) {
            CasaEditrice::create($casaEditrice);
        }
    }
}
