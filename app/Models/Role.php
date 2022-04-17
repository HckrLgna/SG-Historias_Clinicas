<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name','slug','description'
    ];
    //relaciones

    public function permission(){
        return $this->hasMany('App\Permission');
    }
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    //almacenamiento
    //validacion
    //recuperacion informacion
    //otras operaciones
}
