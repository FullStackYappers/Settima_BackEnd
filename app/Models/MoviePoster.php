<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviePoster extends Model
{
    use HasFactory;

    protected $table = 'movie_poster';

    protected $fillable = [
        'movie_id',
        'poster_path',
    ];

    public function movie(){
        return $this->belongsTo(Movies::class);
    }
}
