<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Programa;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::orderBy('id', 'DSC')->paginate(8);

        return view('front.programas.index')
            ->with('programas', $programas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programas = Programa::orderBy('nombre', 'ASC')->lists('nombre', 'id');

        return view('front.programas.create')
            ->with('programas', $programas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = new Programa($request->all());

//paso todos los tiempos a segundos y los guardo

        $programa->riego_s = $request->riego * 60;
        $programa->espera_s = (($request->horas_e * 60)*60)  +  ($request->minutos_e * 60);
        $programa->save();

//        Flash::success('Se ha creado el articulo '. $receta->nombre . ' de forma satisfactoria!');

        return redirect()->route('programas.index');

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
        
        $programa = Programa::find($id);
        $programas = Programa::orderBy('nombre', 'ASC')->lists('nombre', 'id');

        return view('front.programas.edit')
            ->with('programa', $programa)
            ->with('programas', $programas);

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
        $programa = Programa::find($id);

        $programa->fill($request->all());
        $programa->save();

        return redirect()->route('programas.index');

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
