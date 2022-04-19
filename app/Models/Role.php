<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Role extends Model
{
    protected $fillable = [
        'name','description','slug'
    ];
    //relaciones

    public function permission(){
        return $this->hasMany('App\Permission');
    }
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    //almacenamiento
    public function store($request){
        $slug = Str::slug($request->name,'-');
        alert('Exito','El rol se guardó','success');
        return self::create($request->all() + [
                'slug'=>$slug,
            ]);
    }
    public function my_update($request){
        $slug = Str::slug($request->name, '-');
        self::update($request->all()+[
            'slug'=> $slug
            ]);
    }
    //validacion
    //recuperacion informacion
    //otras operaciones
}
