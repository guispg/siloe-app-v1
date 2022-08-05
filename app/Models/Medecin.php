<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Patient ;
use App\Models\Consultation ;
use App\Models\Actemedical ;


class Medecin extends Model
{
    use HasFactory;

    public function patients(){
        return $this->belongsToMany(Patient::class);
    }

    public function actemedicals(){
        return $this->belongsToMany(Actemedical::class);
    }

    public function consultations(){
        return $this->belongsToMany(Consultation::class);
    }
}
