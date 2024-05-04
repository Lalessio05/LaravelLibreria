<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasaEditrice extends Model
{
    use HasFactory;
    protected $table = 'casa_editrice';
    protected $fillable = [
        'nome',
        'dataFondazione',
    ];
}
