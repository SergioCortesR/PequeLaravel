<?php

namespace App\Models\Catalogs\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

trait CountryRelationships{
    /**/
    public function states(): HasMany{
        //return $this->hasMany(State::class);
    }
}
