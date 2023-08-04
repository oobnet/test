<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'especialidade',
        'user_id',
        'city_id',
        'deleted_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'deleted_at'
    ];


    /**
     * Get the phone associated with the user.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

      /**
     * Get the phone associated with the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the phone associated with the user.
     */
    public function patients()
    {
        return $this->hasMany(DoctorPatient::class)->with('patient');
    }

    
}
