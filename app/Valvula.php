<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valvula extends Model
{
    protected $table = "valvulas";
    protected $fillable = ['direccion','descripcion','nombre','ultimoriego','estado','bomba_id', 'zonariego_id'];

    public function bomba()
    {
    	return $this->belongsTo('App\Bomba', 'bomba_id', 'id');
    }

    public function zonariego()
    {
        return $this->belongsTo('App\Zonariego', 'zonariego_id', 'id');
    }

    public function riegohistorials()
    {
        return $this->hasMany('App\Riegohistorial');
    }
}
