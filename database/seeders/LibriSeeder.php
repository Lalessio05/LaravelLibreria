<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libri = [
            ['titolo' => 'Harry Potter e la Pietra Filosofale', 'annoPubblicazione' => 1997, 'idAutore_fk' => 1, 'idCasaEditrice_fk' => 1, 'idGenere_fk' => 1, 'ISBN' => '978-88-04-49663-5'],
            ['titolo' => 'Il Signore degli Anelli', 'annoPubblicazione' => 1954, 'idAutore_fk' => 3, 'idCasaEditrice_fk' => 2, 'idGenere_fk' => 1, 'ISBN' => '978-88-04-49663-5'],
            ['titolo' => 'It', 'annoPubblicazione' => 1986, 'idAutore_fk' => 2, 'idCasaEditrice_fk' => 3, 'idGenere_fk' => 3, 'ISBN' => '978-88-04-49663-5']
        ];

        foreach ($libri as $libro) {
            Libro::create($libro);
        }
    }
}
