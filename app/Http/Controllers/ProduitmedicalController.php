<?php

namespace App\Http\Controllers;

use App\Models\Produitmedical;
use App\Http\Requests\StoreProduitmedicalRequest;
use App\Http\Requests\UpdateProduitmedicalRequest;

class ProduitmedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduitmedicalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduitmedicalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produitmedical  $produitmedical
     * @return \Illuminate\Http\Response
     */
    public function show(Produitmedical $produitmedical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produitmedical  $produitmedical
     * @return \Illuminate\Http\Response
     */
    public function edit(Produitmedical $produitmedical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduitmedicalRequest  $request
     * @param  \App\Models\Produitmedical  $produitmedical
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduitmedicalRequest $request, Produitmedical $produitmedical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produitmedical  $produitmedical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produitmedical $produitmedical)
    {
        //
    }
}
