<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Department extends Model
{
    use HasFactory;

    protected $table = 'department';

    protected $fillable = ['name'];

    public function people()
    {
        return $this->hasMany(Person::class);
    }

    public function crewMembers()
    {
        return $this->hasMany(Crew::class);
    }
}
