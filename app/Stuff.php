<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'role'
    ];

//    public function stuff()
//    {
//        return $this->hasMany(Position::class);
//    }
}
