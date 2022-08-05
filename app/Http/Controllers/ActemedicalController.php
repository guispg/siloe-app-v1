<?php

namespace App\Http\Controllers;

use App\Models\Actemedical;
use App\Http\Requests\StoreActemedicalRequest;
use App\Http\Requests\UpdateActemedicalRequest;

class ActemedicalController extends Controller
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
     * @param  \App\Http\Requests\StoreActemedicalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActemedicalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actemedical  $actemedical
     * @return \Illuminate\Http\Response
     */
    public function show(Actemedical $actemedical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actemedical  $actemedical
     * @return \Illuminate\Http\Response
     */
    public function edit(Actemedical $actemedical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActemedicalRequest  $request
     * @param  \App\Models\Actemedical  $actemedical
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActemedicalRequest $request, Actemedical $actemedical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actemedical  $actemedical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actemedical $actemedical)
    {
        //
    }
}
