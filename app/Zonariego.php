<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zonariego extends Model
{
    protected $table = "zonariego";
    protected $fillable = ['descripcion'];

    public function bombas()
    {
        return $this->hasMany('App\Bomba');
    }

    public function valvulas()
    {
        return $this->hasMany('App\Valvula');
    }
}
