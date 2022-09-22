<?php

namespace App\Http\Controllers;

use App\Models\Deportista;
use App\Http\Requests\StoreDeportistaRequest;
use App\Http\Requests\UpdateDeportistaRequest;

class DeportistaController extends Controller
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
     * @param  \App\Http\Requests\StoreDeportistaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeportistaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deportista  $deportista
     * @return \Illuminate\Http\Response
     */
    public function show(Deportista $deportista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deportista  $deportista
     * @return \Illuminate\Http\Response
     */
    public function edit(Deportista $deportista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeportistaRequest  $request
     * @param  \App\Models\Deportista  $deportista
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeportistaRequest $request, Deportista $deportista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deportista  $deportista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deportista $deportista)
    {
        //
    }
}
