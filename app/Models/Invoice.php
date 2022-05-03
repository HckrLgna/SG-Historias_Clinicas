<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'amount','status','user_id'
    ];
    //relaciones
    public function user (){
        return $this->belongsTo('App\Models\User');
    }
    public function appointment(){
        return $this-> belongsTo('App\Models\Appointment');
    }
    public function metas(){
        return $this->hasMany('App\Models\InvoiceMeta');
    }
    //almacenamiento
    public function store($request){
         return self::create([
             'amount' => 500,
             'status' => 'pending',
             'user_id' => $request->user()->id
         ]);
    }
}
