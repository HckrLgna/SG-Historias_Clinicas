<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class ClinicNote extends Model
{
    protected $fillable = [
        'date', 'description', 'privacy', 'user_id', 'created_by'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function creator()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }
    #ALMACENAMIENTO
    public function store($request, $user)
    {
        self::create([
            'date' => Carbon::now(),
            'description' => $request->description,
            'privacy' => $request->privacy,
            'user_id' => $user->id,
            'created_by' => $request->user()->id
        ]);
    }
    public function my_update($request)
    {
        self::update([
            'description' => $request->description,
            'privacy' => $request->privacy,
        ]);
    }
}
