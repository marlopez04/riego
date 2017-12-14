<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bomba;
use App\Programa;
use App\Valvula;
use App\Zonariego;
use App\RiegoHistorial;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RiegoHistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $riegos = RiegoHistorial::orderBy('id', 'DSC')->paginate(5);
        $riegos->load('valvula', 'zonariego', 'programa', 'bomba');
dd($riegos);
        return view('front.riegohistorial.index')
            ->with('riegos', $riegos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $riegohistorial = new RiegoHistorial();
        $riegohistorial->programa_id = 1;
        $riegohistorial->zonariego_id = 1;
        $riegohistorial->bomba_id = 1;
        $riegohistorial->valvula_id = 1;
        $riegohistorial->save();

        return redirect()->route('riegohistorial.edit',$riegohistorial->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $riegohistorial = RiegoHistorial::find($id);
        $menu = $_GET['menu'];
       // $idagregar = $_GET['id'];

        switch ($menu) {
            case 1:
                //cuando elige zona
                $zonas = Zonariego::all();

                $html = view('riegohistorial.partials.zona')
                   ->with('zonas', $zonas)
                   ->with('riegohistorial', $riegohistorial);

                break;
            case 2:
                //cuando elige valvula
                // $valvulas = Valvula::all();

                $valvulas = Valvula::where('stat', '=', 'online')
                              ->where('nombre', '<>', 'null')->get();

                $html = view('front.riegohistorial.partials.valvula')
                   ->with('valvulas', $valvulas)
                   ->with('riegohistorial', $riegohistorial);

                return $html;

                break;
            case 3:
                //cuando elige el programa
                $programas = Programa::where('stat', '=', 'online')
                                     ->where('nombre', '<>', 'null')->get();

                $html = view('riegohistorial.partials.programa')
                   ->with('programas', $programas)
                   ->with('riegohistorial', $riegohistorial);

                break;
            case 4:
                //cuando confirma
                $riegohistorial->load('valvula', 'programa', 'bomba', 'zonariego');
                $html = view('riegohistorial.partials.confirmar')
                   ->with('riegohistorial', $riegohistorial);

                break;
        }

        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $riegohistorial = RiegoHistorial::find($id);

//con ajax y jquery inicio
        $zonas = Zonariego::where('stat', '=', 'online')
                           ->where('descripcion', '<>', 'null')->get();

        $valvulas = Valvula::where('stat', '=', 'online')
                           ->where('nombre', '<>', 'null')->get();

        $programas = Programa::where('stat', '=', 'online')
                           ->where('nombre', '<>', 'null')->get();
/*
//con ajax y jquery fin

        $zonas = Zonariego::where('stat', '=', 'online')
                           ->where('descripcion', '<>', 'null')->lists('descripcion', 'id');

        $valvulas = Valvula::where('stat', '=', 'online')
                           ->where('nombre', '<>', 'null')->lists('nombre', 'id');

        $programas = Programa::where('stat', '=', 'online')
                           ->where('nombre', '<>', 'null')->lists('nombre', 'id');
*/

        return view('front.riegohistorial.edit')
            ->with('riegohistorial', $riegohistorial)
            ->with('zonas', $zonas)
            ->with('valvulas', $valvulas)
            ->with('programas', $programas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function nuevo($id)
    {
        $riegohistorial = new RiegoHistorial();
        $riegohistorial->zonariego_id = $id;
        $riegohistorial->save();

        return redirect()->route('riegohistorial.edit',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $riegohistorial = RiegoHistorial::find($id);
        $riegohistorial->save();
        $riegohistorial->load('valvula');
        $riegohistorial->bomba_id = $riegohistorial->valvula->bomba_id;
        $riegohistorial->stat = 'online';
        $riegohistorial->save();

        return redirect()->route('riegohistorial.index');

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
