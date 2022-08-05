<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Http\Requests\StoreFactureRequest;
use App\Http\Requests\UpdateFactureRequest;


class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toutesLesFactures = Facture::where('created_at', '!=', null)->orderBy('created_at', 'desc')->get() ;

        //$toutesLesFactures = Facture::all() ;

        return view('siloe.facture.liste-facture')->with('toutesLesFactures', $toutesLesFactures) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('siloe.facture.creer-facture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFactureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFactureRequest $request)
    {
        //

        //dd($request->all(), intval($request->consultation));

        $nouvelleFacture = Facture::create([

            // champ chaine de caractère à renseigner
            'nomPrenom' => $request->nomPrenom,
            'numeroDossier' => $request->numeroDossier,
            'matricule' => $request->matricule,
            'objet' => $request->objet,

            // champ numerique à renseigner
            'consultation' => intval($request->consultation),
            'sejour' => intval($request->sejour),
            'ami' => intval($request->ami),
            'pharmacie' => intval($request->pharmacie),
            'examinBiologique' => intval($request->examinBiologique),
            'pocheDeSang' => intval($request->pocheDeSang),
            'acteDeTransfusion' => intval($request->acteDeTransfusion),

            'aavancePayee' => intval($request->aavancePayee),

            // champ calculé
            'montantTotal' => intval($request->consultation) +
                                                    intval($request->sejour) +
                                                    intval($request->ami) +
                                                    intval($request->pharmacie) +
                                                    intval($request->examinBiologique) +
                                                    intval($request->pocheDeSang) +
                                                    intval($request->acteDeTransfusion),


            'resteAPayer' => ( intval($request->consultation) +
                                intval($request->sejour) +
                                intval($request->ami) +
                                intval($request->pharmacie) +
                                intval($request->examinBiologique) +
                                intval($request->pocheDeSang) +
                                intval($request->acteDeTransfusion) ) - intval($request->aavancePayee),

            'netAPayer' => intval($request->consultation) +
                                intval($request->sejour) +
                                intval($request->ami) +
                                intval($request->pharmacie) +
                                intval($request->examinBiologique) +
                                intval($request->pocheDeSang) +
                                intval($request->acteDeTransfusion),

        ]);

        session()->flash('succes', 'La facture a été enregistrer avec succès.');

        return redirect()->route('facture.liste');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture, $id)
    {
        $factureAModifier = Facture::find($id) ;
        return view('siloe.facture.modifier-facture')->with('factureAModifier', $factureAModifier) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFactureRequest  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFactureRequest $request, Facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        //
    }

    /**
     *
     */
    public function imprimerUneFacture($id){
        $factureAImprimer = Facture::find($id) ;
        return view('siloe.facture.imprimer-facture')->with('factureAImprimer', $factureAImprimer) ;
    }
}
