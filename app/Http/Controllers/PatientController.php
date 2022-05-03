<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Invoice;
use App\Models\Speciality;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function schedule(){
        return view('theme.frontoffice.pages.user.patient.schedule',[
            'specialities' => Speciality::all(),
        ]);
    }
    public function store_schedule(Request $request, Appointment $appointment, Invoice $invoice){


        $invoice = $invoice->store($request);

        $appointment = $appointment->store($request , $invoice);
        return redirect()->route('frontoffice.patient.appointments');
    }
    public function back_schedule(User $user){
        return view('theme.backoffice.pages.user.patient.schedule',[
            'user' => $user,
        ]);
    }
    public function back_appointments(User $user){
        return view('theme.backoffice.pages.user.patient.appointment',[
            'user' => $user
        ]);
    }
    public function appointments(){
        return view('theme.frontoffice.pages.user.patient.appointments');
    }
    public function prescriptions(){
        return view('theme.frontoffice.pages.user.patient.prescriptions');
    }
    public function invoices(){
        return view('theme.frontoffice.pages.user.patient.invoices');
    }
    public function back_invoices(User $user){
        return view('theme.backoffice.pages.user.patient.invoice',[
            'user' => $user
        ]);
    }
}
