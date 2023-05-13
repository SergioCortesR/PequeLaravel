<?php

namespace Database\Seeders\Catalogs;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Catalogs\Country\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries=[
            [
            
            'id'=>'1',
                'name'=>'Mexico',
            'iso_code_2'=>'MX',
            'iso_code_3'=>'MEX'
            ],
            [
            'id'=>'2',
                'name'=>'Estados Unidos',
            'iso_code_2'=>'US',
            'iso_code_3'=>'USA'
            ],
            [
                'id'=>'3',
            'name'=>'Canada',
            'iso_code_2'=>'CA',
            'iso_code_3'=>'CAN'
            ],
        ];
        foreach($countries as $country){//firstOrCreate sirve crear un registro una vez y si ya existe no lo duplica
            Country::withTrashed()->firstOrCreate(//withTrasehd->Sirve para no crear conflicto con registros borrados logicamente 
                ['id'=>$country['id']],$country);
        }
        
        //Country::factory(10)->create();
    }
}
