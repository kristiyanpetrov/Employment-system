<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'role'
    ];

    public function stuff()
    {
        return $this->belogsTo(Stuff::class);
    }

    public function position()
    {
        return $this->hasMany(Position::class);
    }
}
