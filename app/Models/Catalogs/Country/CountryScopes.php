<?php

namespace App\Models\Catalogs\Country;


use Illuminate\Database\Eloquent\Builder;

trait CountryScopes{
    /**/
    public function scopeFilterMexIsoCode(Builder $query){
        $query->where('iso_code_3','MEX');
    }
}
