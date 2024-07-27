<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;
    protected $fillable = ['characteristic'];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class)->using('App\Models\CharacteristicRestaurant');
    }
}
