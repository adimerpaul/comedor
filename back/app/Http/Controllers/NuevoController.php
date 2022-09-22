<?php

namespace App\Http\Controllers;

use App\Models\Nuevo;
use App\Http\Requests\StoreNuevoRequest;
use App\Http\Requests\UpdateNuevoRequest;

class NuevoController extends Controller
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
     * @param  \App\Http\Requests\StoreNuevoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNuevoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nuevo  $nuevo
     * @return \Illuminate\Http\Response
     */
    public function show(Nuevo $nuevo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nuevo  $nuevo
     * @return \Illuminate\Http\Response
     */
    public function edit(Nuevo $nuevo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNuevoRequest  $request
     * @param  \App\Models\Nuevo  $nuevo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNuevoRequest $request, Nuevo $nuevo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nuevo  $nuevo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nuevo $nuevo)
    {
        //
    }
}
