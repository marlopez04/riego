<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bomba;
use App\Zonariego;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BombasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bombas = Bomba::orderBy('id', 'DSC')->paginate(5);
        $bombas->load('zonariego');


        return view('front.bombas.index')
            ->with('bombas', $bombas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zonariego::orderBy('descripcion', 'ASC')->lists('descripcion', 'id');

        return view('front.bombas.create')
            ->with('zonas', $zonas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bomba = new Bomba($request->all());
        $bomba->save();

        return redirect()->route('bombas.index');
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
        $bomba = Bomba::find($id);
        $zonas = Zonariego::orderBy('descripcion', 'ASC')->lists('descripcion', 'id');

        return view('front.bombas.edit')        
            ->with('bomba', $bomba)
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
        $bomba = bomba::find($id);

        $bomba->fill($request->all());
        $bomba->save();

        return redirect()->route('bombas.index');
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
