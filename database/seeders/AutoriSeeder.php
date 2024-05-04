<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autore;

class AutoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autori = [
            ['nome' => 'J.K.', 'cognome' => 'Rowling', 'dataNascita' => '1965-07-31', 'idNazione_fk' => 3],
            ['nome' => 'Stephen', 'cognome' => 'King', 'dataNascita' => '1947-09-21', 'idNazione_fk' => 2],
            ['nome' => 'George', 'cognome' => 'Martin', 'dataNascita' => '1948-09-20', 'idNazione_fk' => 3]
        ];

        foreach ($autori as $autore) {
            Autore::create($autore);
        }
    }
}
