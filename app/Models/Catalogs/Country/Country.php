<?php

namespace App\Models\Catalogs\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Database\Factories\Catalogs\CountryFactory;

class Country extends Model
{
    use HasFactory, SoftDeletes, CountryAccessors,CountryRelationships, CountryScopes;

    public $table='countries';

    protected $fillable=['name','iso_code_2','iso_code_3']; //Asingnamiento masivo: Tu que le vas a permitir modificar
    //protected $guarded=['id','created_at','updated_at','deleted_at']; Es escoger uno u otro, no los dos

    //Como quiero que me regrese el contenido 
    protected $casts=[
        'id'=>'integer',
        'updated_at'=>'datetime',
        'created_at'=>'datetime',
        'deleted_at'=>'datetime',
    ];

    public static function newFactory(){
        return CountryFactory::new();
    }

    
    
}
