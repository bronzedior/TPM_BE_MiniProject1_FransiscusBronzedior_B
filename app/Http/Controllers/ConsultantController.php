<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Consultant;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    public function welcome(){
        $consultants = Consultant::all();
        return view('welcome', compact('consultants'));
    }

    public function store(Request $request){
        Consultant::create([
            'name' => $request->name,
            'position' => $request->position,
            'industry' => $request->industry,
            'expertise' => $request->expertise,
            'hourlyRate' => $request->hourlyRate,
            'availability' => $request->availability,
            'client_id' => $request->client_needs,
        ]);

        return redirect(route('welcome'));
    }

    public function addConsultant(){
        $clients = Client::all();
        return view('addConsultant', compact('clients'));
    }
}
