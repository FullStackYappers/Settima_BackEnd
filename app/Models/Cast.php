<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    protected $table = 'cast';

    protected $fillable = [
        'movie_id',
        'person_id',
        'character_name'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
