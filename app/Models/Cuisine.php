<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Patient ;
use App\Models\Consultation ;

class Cuisine extends Model
{
    use HasFactory;

    public function consultations(){
        return $this->belongsToMany(Consultation::class);
    }

    public function patients(){
        return $this->belongsToMany(Patient::class);
    }
}
