<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'publication_year',
        'author_id_fk',
        'publisher_id_fk',
        'genre_id_fk',
        'ISBN',
    ];
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id_fk');
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class, 'publisher_id_fk');
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id_fk');
    }
}
