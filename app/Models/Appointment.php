<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InvoiceMeta;

class Appointment extends Model
{
    protected $fillable = [
        'date','doctor_id','status','user_id','invoice_id'
    ];
    public function invoice(){
        return $this->hasOne('App\Models\Invoice');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function store($request , $invoice){
        //$date = Carbon::createFromDate('Y-m-d H:i', $request->date_submit . '' .$request->time_submit);
        $date = Carbon::now();

        InvoiceMeta::create([
            'key' => 'doctor',
            'value' => $request->doctor,
            'invoice_id' => $invoice->id,
        ]);
        return self::create([
            'date' => $date->toDateTimeString(),
            'id_doctor' => $request->doctor,
            'status' => 'pending',
            'user_id' => $request->user()->id,
            'invoice_id' => $invoice->id,
        ]);
    }
}
