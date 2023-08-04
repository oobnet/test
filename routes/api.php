<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\PatientController;


Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::resource('medicos',DoctorController::class);
    Route::get('medicos/{id_medico}/pacientes',[DoctorController::class,'getPatients']);
    Route::post('medicos/{id_medico}/pacientes',[DoctorController::class,'createPatient']);
    Route::resource('pacientes',PatientController::class);
   
});

Route::resource('cidades',CityController::class);
Route::get('cidades/{id_cidade}/medicos',[CityController::class,'getCityDoctors']);




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
