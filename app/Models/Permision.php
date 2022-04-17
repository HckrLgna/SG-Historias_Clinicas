<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permision extends Model
{
    protected $fillable=['name','slug','description'];
    //relaciones
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    //almacenamiento
    //validacion
    //recuperacion de la informacion
    //otras operacion
}
