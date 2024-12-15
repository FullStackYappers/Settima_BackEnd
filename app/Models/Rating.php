<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movie_id',
        'acting',
        'plot',
        'music',
        'costume_design',
        'cinematography',
        'editing',
        'review',
    ];


public function user(){
    return $this->belongsTo(User::class);
}

public function movie(){
    return $this->belongsTo(Movie::class);
}

}

