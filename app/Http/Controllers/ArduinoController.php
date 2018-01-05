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
       header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
       header('Access-Control-Max-Age: 1000');
       header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

class ArduinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
       header('Access-Control-Allow-Origin: *');  

        $id = $_GET['id'];

        #$id = $_GET['id'];
       #$menu = $_GET['id'];
       print_r($_GET);

        $valvulas = Valvula::find(1);

        //dd($valvulas);

        return $valvulas->toJson();
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
       header('Access-Control-Allow-Origin: *');  

//       $valvulas = Valvula::where('zonariego_id','=',$id)->get();

/*
        $valvulas = \DB::select("SELECT id as id, 
                                FROM valvulas
                                WHERE zonariego_id = '{$id}'");
*/
//        dd($valvulas);
        #$id = $_GET['id'];
       #$menu = $_GET['id'];
//       print_r($_GET);

        $valvulas = Valvula::find($id);

        //dd($valvulas);

        return $valvulas->toJson();
        //return $valvulas->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
