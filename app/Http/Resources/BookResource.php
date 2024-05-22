<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'publication_year' => $this->publication_year,
            'author' => $this->author->first_name . ' ' . $this->author->last_name,
            'publisher' => $this->publisher->name,
            'genre' => $this->genre->name,
            'ISBN' => $this->ISBN,
        ];

    }
}
