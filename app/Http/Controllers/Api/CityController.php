<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CidadeMedicoResource;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['cidades' => City::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json(['not permition']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(['not permition']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(['not permition']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response()->json(['not permition']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json(['not permition']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json(['not permition']);
    }

    public function getCityDoctors($cidy_id){
       $cidade =  City::findOrFail($cidy_id);
       return response()->json(['medicos' => CidadeMedicoResource::collection($cidade->doctors),$cidade->doctors ]);
    }
}
