<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['pacientes' => Patient::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arrayValidaitor = [
            'nome' => 'required|max:100',
            'cpf' => 'required|max:30',
            'celular' => 'required|max:20',
        ];
    
        $validator = Validator::make($request->all(),  $arrayValidaitor);
        if ( $validator->fails() )
        {
            return response()->json(['erros' => $validator->errors(), 'status' => false]);
        }

        $patient = Patient::create($request->all());
        return response()->json($patient);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $paciente = Patient::find($id); 
        
        if(!$paciente)
        {
            return response()->json(['erros' => 'Paciente não encontrado', 'status' => false]);
        }
        
        $arrayValidaitor = [
            'nome' => 'required|max:100',
            'cpf' => 'required|max:30',
            'celular' => 'required|max:20',
        ];
    
        $validator = Validator::make($request->all(),  $arrayValidaitor);
        if ( $validator->fails() )
        {
            return response()->json(['erros' => $validator->errors(), 'status' => false]);
        }

        $paciente->update($request->all());
        return response()->json(['status' => true, 'message' => 'Paciente atualizado']);
      

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
