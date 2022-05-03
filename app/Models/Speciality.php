<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable = [
        'name',
    ];
    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }

    //almacenamiento
    public function my_store($request){
        return Self::create($request->all());
    }
    public function my_update($request){
       return self::updated($request->all());
    }
}
