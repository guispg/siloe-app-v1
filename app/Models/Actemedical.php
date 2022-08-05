<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Patient ;
use App\Models\Consultation ;
use App\Models\Medecin ;


class Actemedical extends Model
{
    use HasFactory;

    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }

    public function patients(){
        return $this->belongsToMany(Patient::class);
    }

    public function consultations(){
        return $this->belongsToMany(Consultation::class);
    }
}
