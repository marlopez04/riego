<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Valvula;
use App\Bomba;
use App\Zonariego;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ValvulasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valvulas = Valvula::orderBy('id', 'DSC')->paginate(8);
        $valvulas->load('bomba', 'zonariego');

        return view('front.valvulas.index')
            ->with('valvulas', $valvulas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bombas = Bomba::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $zonas = Zonariego::orderBy('descripcion', 'ASC')->lists('descripcion', 'id');


        return view('front.valvulas.create')
            ->with('zonas', $zonas)
            ->with('bombas', $bombas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valvula = new Valvula($request->all());
        $valvula->save();

        return redirect()->route('valvulas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valvula = Valvula::find($id);
        $bombas = Bomba::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $zonas = Zonariego::orderBy('descripcion', 'ASC')->lists('descripcion', 'id');

        return view('front.valvulas.edit')
            ->with('valvula', $valvula)
            ->with('bombas', $bombas)
            ->with('zonas', $zonas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valvula = Programa::find($id);

        $valvula->fill($request->all());
        $valvula->save();

        return redirect()->route('valvulas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
