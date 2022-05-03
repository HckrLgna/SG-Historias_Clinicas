<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function user_speciality(Request $request){
        if ($request->ajax()){
            $speciality = Speciality::finOrFail($request->speciality);
            $users = $speciality->users;
            return response()->json($users);
        }
    }
    public function note_info(Request $request)
    {
        if($request->ajax()){
            $note = \App\Models\ClinicNote::findOrFail($request->note_id);
            return response()->json([
                'route' => route('backoffice.clinic_note.update', [$note->user, $note]),
                'description' => $note->description,
                'privacy' => $note->privacy
            ]);
        }
    }
}
