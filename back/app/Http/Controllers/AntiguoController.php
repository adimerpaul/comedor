<?php

namespace App\Http\Controllers;

use App\Models\Antiguo;
use App\Http\Requests\StoreAntiguoRequest;
use App\Http\Requests\UpdateAntiguoRequest;
use App\Models\Semestre;
use Illuminate\Http\Request;

class AntiguoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        return Antiguo::where('user_id', $request->user()->id)->get();
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
     * @param  \App\Http\Requests\StoreAntiguoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAntiguoRequest $request)
    {
        $semestre = Semestre::where('activo', true)->first();
        if (!$semestre) {
            return response()->json(['message' => 'No hay semestre activo',], 400);
        }
        $antiguoExistente = Antiguo::where('user_id', $request->user()->id)->where('semestre_id', $semestre->id)->first();
        if ($antiguoExistente) {
            $antiguoExistente->update($request->all());
        }else{
            Antiguo::create($request->all());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antiguo  $antiguo
     * @return \Illuminate\Http\Response
     */
    public function show(Antiguo $antiguo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antiguo  $antiguo
     * @return \Illuminate\Http\Response
     */
    public function edit(Antiguo $antiguo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAntiguoRequest  $request
     * @param  \App\Models\Antiguo  $antiguo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAntiguoRequest $request, Antiguo $antiguo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antiguo  $antiguo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antiguo $antiguo)
    {
        //
    }
}
