<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';

    protected $fillable = [
        'name',
        'birthday',
        'biography',
        'department_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function cast()
    {
        return $this->hasMany(Cast::class);
    }

    public function crew()
    {
        return $this->hasMany(Crew::class);
    }
}
