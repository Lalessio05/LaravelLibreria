<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'country_id_fk',
    ];
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id_fk');
    }
}
