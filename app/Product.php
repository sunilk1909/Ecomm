<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function users()
    {
       return $this->belongsToMany(User::class )->withTimestamps();
    }
    public function wishlist()
    {
        return $this->belongsToMany(wishlist::class)->withTimestamps();
    }
}
