<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use App\Models\Doctor;
use App\Models\DoctorPatient;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        City::factory(30)->create();
       
        User::factory(10)->create();
        Patient::factory(30)->create();

        Doctor::factory(10)->state(new Sequence(
            fn (Sequence $sequence) => [
                'user_id' => User::all()->random(),
                'city_id' => City::all()->random()
            ],
        ))->create();

        DoctorPatient::factory(30)
        ->state((new Sequence(
            fn (Sequence $sequence) => [
                'doctor_id' => Doctor::all()->random(),
                'patient_id' => Patient::all()->random()
            ],
        )
        ))->create(); 
       
      



      
    }
}
