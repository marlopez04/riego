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
        $riegos->load('valvula', 'programa', 'bomba', 'zonariego');
  
        return view('front.riegohistorial.index')
            ->with('riegos', $riegos);
/*
        $id = 1;

        $riegohistorial = RiegoHistorial::find($id);

        $programas = Programa::where('stat', '=', 'online')
                             ->where('nombre', '<>', 'null')->get();


//        $riegohistorials->load('programa');
//                dd($riegohistorials);

//                dd($programas);

        return view('front.riegohistorial.partials.programa')
                ->with('riegohistorial', $ri);
*/

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
        $riegohistorial->stat = "offline";
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
        $idagregar = $_GET['iagregar'];

        switch ($menu) {
            case 1:
                //cuando elige zona
                $zonas = Zonariego::where('stat', '=', 'online')
                           ->where('descripcion', '<>', 'null')->get();

                $html = view('front.riegohistorial.partials.zona')
                   ->with('zonas', $zonas)
                   ->with('riegohistorial', $riegohistorial);

                return $html;

                break;
            case 2:
                //cuando elige valvula
            
            //compruebo si trae id, implica que
            //trae el id de la zona

            if ($idagregar <> 0) {
                $riegohistorial->zonariego_id = $idagregar;
                $riegohistorial->save();

            }

                $valvulas = Valvula::where('stat', '=', 'online')
                              ->where('zonariego_id', '=', $riegohistorial->zonariego_id)
                              ->where('estado', '=', 'libre')
                              ->where('nombre', '<>', 'null')->get();

                $html = view('front.riegohistorial.partials.valvula')
                   ->with('valvulas', $valvulas)
                   ->with('riegohistorial', $riegohistorial);

                return $html;

                break;
            case 3:
                //cuando elige el programa

            //compruebo si trae id, implica que
            //trae el id de la valvula

            if ($idagregar <> 0) {
                $valvula = Valvula::find($idagregar);
                $riegohistorial->valvula_id = $idagregar;
                $riegohistorial->bomba_id = $valvula->bomba_id;
				$riegohistorial->save();
            }

                $programas = Programa::where('stat', '=', 'online')
                                     ->where('nombre', '<>', 'null')->get();

                //dd($programas);

                $html = view('front.riegohistorial.partials.programa')
                   ->with('programas', $programas)
                   ->with('riegohistorial', $riegohistorial);

                return $html;

                break;
				
            case 4:
                //cuando va a confirma

                //compruebo si trae id, implica que
                //trae el id de la valvula


            if ($idagregar <> 0) {
                $riegohistorial->programa_id = $idagregar;
				$riegohistorial->save();
            }

                $riegohistorial->load('valvula','zonariego','bomba');
                //$riegohistorial->load('programa');

                $programa = Programa::find($riegohistorial->programa_id);

                //dd($riegohistorial->programa);


                $html = view('front.riegohistorial.partials.confirmar')
                   ->with('riegohistorial', $riegohistorial)
                   ->with('programa', $programa);

                return $html;

                break;

            case 5:
                //cuando confirma

                $riegohistorial->stat = "online";
                $riegohistorial->save();

                return redirect()->route('riegohistorial.index');                
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
        $sysdate = Carbon::now(); //recupero el sysdate

        //confirmo el riego
        $riego = RiegoHistorial::find($id);
        $riego->stat = "online";
        $riego->estado = "regando";
        $riego->ciclos = 1;
        $riego->save();
        $riego->load('valvula', 'bomba');

        //recupero la valvula, y grabo el tiempo del ultimo riego
        $valvula = Valvula::find($riego->valvula->id);
        $valvula->ultimoriego = $sysdate;
        $valvula->estado = "habierta";
        $valvula->save();

        //activo la valvula y la bomba en arduino

/*
        echo "<script> 
                ventana1 = window.open('".$valvula->direccion. "ON"."', 'nuevo', 'width=400,height=400');
                setTimeout(cerrarVentana,60);
                ventana2 = window.open('".$riego->bomba->direccion. "ON"."', 'nuevo', 'width=400,height=400');
                setTimeout(cerrarVentana,60);
                function cerrarVentana(){
                ventana1.close();
                location.href='".route('riegohistorial.index')."';
                }
        </script>";
*/

/*
        echo "<script>";
        echo "jquery.get('http://192.168.1.103:84/', function(){location.href='".route('riegohistorial.index')."';});";
        echo "</script>";

        echo route('riegohistorial.index');
        die;
*/
        return redirect()->route('riegohistorial.index');
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
