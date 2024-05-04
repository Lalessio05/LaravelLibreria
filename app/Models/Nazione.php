<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nazione extends Model
{
    use HasFactory;
    protected $table = 'nazione';
    protected $fillable = [
        'nome',
    ];
}
