<?php

namespace App\Models\Catalogs\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

trait CountryAccessors{
    public function getFullDataAttribute(){
        return 'Hola mundo';
        //$this->name . '' . $this->iso_code_2 . '' . $this->iso_code_3;
    }
}