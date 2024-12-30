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
}
