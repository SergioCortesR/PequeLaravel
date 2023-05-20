<?php
namespace App\Http\Controllers\Catalogs;

use Illuminate\Http\Request;
use App\Http\Requests\Catalogs\CountryRequest;
use App\Models\Catalogs\Country\Country;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $first=request('first',0);
        $rows=request('rows',10);

        //dd(request('first'));
        //return Country::all();
        //$countries=Country::all();
        $countries=Country::query()->offset($first)->limit($rows)->get();
        //dd($countries);
        return response()->json([
            $countries
        ],500);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryRequest $request)
    {
        //dd($request->validated());
        $newCountry=Country::create($request->validated());
        //return Country::create($request->validated());
        return response()->json([$newCountry],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //dd($country);
        //$myCountry=Country::findOrFail($id);
        return response()->json([$country],200);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountryRequest $request, Country $country)
    {
        $country->fill($request->validated());
        $country->save();
        //dd($country);
        return response()->json([$country],200);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return response()->json(['Hola soy el destroy'],204);
        
    }


    /*Mi nuevo metodo que devuelve un string*/
    public function custom(){
        return response()->json(['Hola soy la cadena'],200);
    } 
}
//Status 200 satisfactorios
//Status 300 
//Status 400 Error de
//Status 500 Error del servidor
//Mandar a llamar accesores y scopes en el index