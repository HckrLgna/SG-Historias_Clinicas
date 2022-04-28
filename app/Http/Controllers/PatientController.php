<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function cite(){
        return view('theme.frontoffice.pages.user.patient.cite');
    }
}
