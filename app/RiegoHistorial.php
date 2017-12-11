<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiegoHistorial extends Model
{
    protected $table = "riegohistorial";
    protected $fillable = ['estado','ciclos', 'programa_id','valvula_id','bomba_id','zonariego_id'];

    public function valvula()
    {
    	return $this->belongsTo('App\Valvula', 'valvula_id', 'id');
    }

    public function programa()
    {
        return $this->belongsTo('App\Programa', 'programa_id', 'id');
    }

    public function bomba()
    {
    	return $this->belongsTo('App\Bomba');
    }

    public function zonariego()
    {
    	return $this->belongsTo('App\Zonariego');
    }

}
