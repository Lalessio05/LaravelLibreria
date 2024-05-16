<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
    use HasFactory;
    protected $table = 'autore';
    protected $fillable = [
        'nome',
        'cognome',
        'dataNascita',
        'idNazione_fk',
    ];
    public function nazione(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Nazione::class, 'idNazione_fk');
    }
}
