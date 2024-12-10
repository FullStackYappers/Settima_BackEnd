<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'release_year',
        'runtime',
        'description',
        'rate_avg',
    ];

    // Relationships can be added here
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }
}