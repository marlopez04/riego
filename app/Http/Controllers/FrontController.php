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
        return view('front.index');
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
            if ($riego->estado == "regando") {
                //cuando esta regando
                if( $riego->programa->riego_s < $diferenciatiempo ){
                    $riego->estado = "esperando";
                    $riego->save();
                }

            }else{
                //cuando esta esperando para regar
                if( $riego->programa->espera_s < ($diferenciatiempo + $riego->programa->riego_s) ){
                    $riego->estado = "regando";
                    $riego->save();
                    //pasa a regar, actualizo el ultimo riego de la valvula
                    $valvula = Valvula::find($riego->valvula->id);
                    $valvula = 
                }
            }

        }
        
        $zonas = Zonariego::all();
        $zonas->load('valvulas');
  
        return view('front.index2')
            ->with('zonas', $zonas)
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
