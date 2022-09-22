<?php

namespace App\Http\Controllers;

use App\Models\Critico;
use App\Http\Requests\StoreCriticoRequest;
use App\Http\Requests\UpdateCriticoRequest;

class CriticoController extends Controller
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
     * @param  \App\Http\Requests\StoreCriticoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCriticoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Critico  $critico
     * @return \Illuminate\Http\Response
     */
    public function show(Critico $critico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Critico  $critico
     * @return \Illuminate\Http\Response
     */
    public function edit(Critico $critico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCriticoRequest  $request
     * @param  \App\Models\Critico  $critico
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCriticoRequest $request, Critico $critico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Critico  $critico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Critico $critico)
    {
        //
    }
}
