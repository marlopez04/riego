<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bomba;
use App\Programa;
use App\Valvula;
use App\Zonariego;
use App\RiegoHistorial;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sysdate = Carbon::now(); //recupero el sysdate
        
        $zonas = Zonariego::all();
        $zonas->load('valvulas');

        $riegos = RiegoHistorial::where('stat', '=', 'online')->get();
        $riegos->load('valvula', 'programa', 'bomba', 'zonariego');
  
        return view('front.index')
            ->with('zonas', $zonas)
            ->with('sysdate', $sysdate)
            ->with('riegos', $riegos);

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
        return view('front.index3');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if ($id == 3) {
            return view('front.index3');
            
        }

        if ($id == 4) {
            return view('front.index4');
        }

        if ($id == 5) {
            return view('front.index5');
        }

        if ($id == 6) {
            return view('front.index6');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function disparador()
    {

        $sysdate = Carbon::now(); //recupero el sysdate

        //recupero todos los riegos activos
        $riegos = RiegoHistorial::where('stat', '=', 'online')->get();
        $riegos->load('valvula', 'programa', 'bomba', 'zonariego');
                         
        //calculo de diferencia en segundos
//        $diferencia = Carbon::parse($sysdate)->diffInSeconds(Carbon::parse($riegos->created_at));

        foreach ($riegos as $riego) {
            $diferenciatiempo = Carbon::parse($sysdate)->diffInSeconds(Carbon::parse($riego->valvula->ultimoriego));

                    //controlo si termino todos los ciclos
                    if ($riego->ciclos == $riego->programa->ciclos) {
                        //controlo si no tiene un programa siguiente para seguir regando

                        if($riego->programa->programasiguiente <> 1){

                            $riego->stat = "offline";
                            $riego->save();
                            $riegonuevo = new Riegohistorial($riego->all());
                            $riegonuevo->programa_id = $riego->programa->programasiguiente;
                            $riegonuevo->ciclos = 1;
                            //pasa a regar, actualizo el ultimo riego de la valvula
                            $valvula = Valvula::find($riego->valvula->id);
                            $valvula->ultimoriego = $sysdate;
                            $valvula->estado = "habierta";
                            $valvula->save();

                        }else{
                            $riego->stat = "offline";
                            $riego->save();
                            //pasa a regar, actualizo el ultimo riego de la valvula
                            $valvula = Valvula::find($riego->valvula->id);
                            $valvula->estado = "libre";
                            $valvula->save();
                        }
                    }

                if ($riego->stat == 'online') {

                    if ($riego->estado == "regando") {
                        //cuando esta regando
                        if( $riego->programa->riego_s < $diferenciatiempo ){
                            $riego->estado = "esperando";
                            $riego->save();

                            $valvula = Valvula::find($riego->valvula->id);
                            $valvula->estado = "cerrada";
                            $valvula->save();
                        }

                    }else{
                        //cuando esta esperando para regar
                        if( $riego->programa->espera_s < ($diferenciatiempo - $riego->programa->riego_s) ){
                            
                                $riego->estado = "regando";
                                $riego->ciclos = $riego->ciclos + 1;
                                $riego->save();
                                //pasa a regar, actualizo el ultimo riego de la valvula
                                $valvula = Valvula::find($riego->valvula->id);
                                $valvula->ultimoriego = $sysdate;
                                $valvula->estado = "habierta";
                                $valvula->save();
                            }
         
                    }

                }
            

        }
        
        $zonas = Zonariego::all();
        $zonas->load('valvulas');

        $riegos = RiegoHistorial::where('stat', '=', 'online')->get();
        $riegos->load('valvula', 'programa', 'bomba', 'zonariego');
  
        return view('front.index2')
            ->with('zonas', $zonas)
            ->with('sysdate', $sysdate)
            ->with('riegos', $riegos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
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
