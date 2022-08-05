<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Medecin ;
use App\Models\Consultation ;
use App\Models\Actemedical ;
use App\Models\Produitmedical ;

use App\Models\Specialite ;
use App\Models\Cuisine ;
use App\Models\Soinsinfirmier ;
use App\Models\Examinsbiologique ;


class Consultation extends Model
{
    use HasFactory;

    public function patients(){
        return $this->belongsToMany(Patient::class);
    }

    public function actemedicals(){
        return $this->belongsToMany(Actemedical::class);
    }

    public function medecins(){
        return $this->belongsToMany(Medecin::class);
    }

    public function produitmedicals(){
        return $this->belongsToMany(Produitmedical::class);
    }

    public function specialites(){
        return $this->belongsToMany(Specialite::class);
    }

    public function cuisines(){
        return $this->belongsToMany(Cuisine::class);
    }

    public function soinsinfirmiers(){
        return $this->belongsToMany(Soinsinfirmier::class);
    }

    public function examinsbiologiques(){
        return $this->belongsToMany(Examinsbiologique::class);
    }
}
