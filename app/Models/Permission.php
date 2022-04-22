<?php

namespace App\Models;

use App\Http\Requests\Permission\StoreRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Session\Store;


class Permission extends Model
{
    protected $fillable=['name','slug','description','role_id'];
    //relaciones
    public function role(){
        return $this->belongsTo('App\Models\Role');
    }
    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }
    //almacenamiento
    public function store($request){
        $slug = Str::slug($request->name,'-');
        alert('exito el permiso se creo con exito','succes')->showConfirmButton();
        return self::create($request->all()+[
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
    //recuperacion de la informacion
    //otras operacion
}
