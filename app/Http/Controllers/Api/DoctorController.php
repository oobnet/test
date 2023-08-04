<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Faker\Generator as Faker;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\MedicoResource;
use App\Http\Resources\PatientResource;
use Illuminate\Support\Facades\Validator;


class DoctorController extends Controller
{



/**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
      
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $medicos = MedicoResource::collection(Doctor::with('user')->get());
        return response()->json(['medicos' =>  $medicos ]);
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
    public function store(Request $request,Faker $faker)
    {   

        $arrayValidaitor = [
            'nome' => 'required|max:100',
            'especialidade' => 'required|max:100',
            'cidade_id' => 'required|int',
        ];
    
        $validator = Validator::make($request->all(),  $arrayValidaitor);
        if ( $validator->fails() )
        {
            return response()->json(['errors' => $validator->errors(), 'status' => false]);
        }

        $user = User::create([
            'name' => $request->nome,
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make(123123)
        ]);

        $doctor = $user->doctor()->create([
            'especialidade' => $request->especialidade,
            'city_id' => $request->cidade_id
        ]); 
        $user->especialidade = $doctor->especialidade;
        
        return response()->json(['usuario' => $user,'cidade' => $doctor->city]);
    }


    public function getPatients($id_medico)
    {
       return response()->json(['pacientes' =>  PatientResource::collection(auth()->user()->doctor->patients)]);
    }


    public function createPatient($id_medico,Request $request)
    {
        $arrayValidaitor = [
            'paciente_id' => 'required|int',
        ];
    
        $validator = Validator::make($request->all(),  $arrayValidaitor);
        if ( $validator->fails() )
        {
            return response()->json(['erros' => $validator->errors(), 'status' => false]);
        }

        $patient = Patient::find($request->paciente_id);
        if(!$patient){
            return response()->json(['status' => false , 'erros' => [ 'message' => 'Error paciente não foi encontrado' ]]);
        }
        auth()->user()->doctor->patients()->firstOrCreate(['patient_id' =>  $patient->id]);
        return response()->json($patient);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(['medico' => auth()->user()->doctor]);
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
}
