<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libro';
    protected $fillable = [
        'titolo',
        'annoPubblicazione',
        'idAutore_fk',
        'idCasaEditrice_fk',
        'idGenere_fk',
        'ISBN',
    ];
    public function autore()
    {
        return $this->belongsTo(Autore::class, 'idAutore_fk');
    }

    public function casaEditrice()
    {
        return $this->belongsTo(CasaEditrice::class, 'idCasaEditrice_fk');
    }

    public function genere()
    {
        return $this->belongsTo(Genere::class, 'idGenere_fk');
    }
}
