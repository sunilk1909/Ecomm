<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    public function products()
    {
         return $this->belongsToMany(Products::class)->withTimestamps();
    }

    public function user()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
