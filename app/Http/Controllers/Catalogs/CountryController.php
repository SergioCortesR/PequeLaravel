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
        //return Country::all();
        $countries=Country::all();
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
        return Country::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
