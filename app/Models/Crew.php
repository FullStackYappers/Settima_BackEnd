<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $table = 'crew';

    protected $fillable = [
        'movie_id',
        'person_id',
        'department_id'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
