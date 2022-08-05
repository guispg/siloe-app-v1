<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nomPrenom',
        'numeroDossier',
        'matricule',
        'objet',

        'consultation',
        'sejour',
        'ami',
        'pharmacie',
        'examinBiologique',
        'pocheDeSang',
        'acteDeTransfusion',

        'montantTotal',
        'aavancePayee',
        'resteAPayer',
        'netAPayer',

    ];
}
