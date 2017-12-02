<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = "programas";
    protected $fillable = ['descripcion','nombre','espera','espera_s','riego','riego_s','ciclos','programasiguiente'];

    public function riegohistorials()
    {
        return $this->hasMany('App\Riegohistorial');
    }
}
