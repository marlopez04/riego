<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = "programas";
    protected $fillable = ['descripcion','nombre','espera_s','horas_e', 'minutos_e' 'riego','riego_s','ciclos','programasiguiente'];

    public function riegohistorials()
    {
        return $this->hasMany('App\Riegohistorial');
    }
}
