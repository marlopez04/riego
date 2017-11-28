<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bomba extends Model
{
    protected $table = "bombas";
    protected $fillable = ['direccion','descripcion','nombre','ultimoriego','estado','zonariego_id'];

    public function zonariego()
    {
    	return $this->belongsTo('App\Zonariego', 'zonariego_id', 'id');
    }

}
