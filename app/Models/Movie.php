<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movie';

    protected $fillable = [
        'title',
        'release_year',
        'runtime',
        'description',
        'rate_avg',
        'poster_path',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }

    public function trailer()
    {
        return $this->hasOne(Trailer::class);
    }
}
