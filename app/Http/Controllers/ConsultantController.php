<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Consultant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConsultantController extends Controller
{
    public function welcome(){
        $consultants = Consultant::all();
        return view('welcome', compact('consultants'));
    }

    public function seedClients(){
        Artisan::call('migrate:fresh --seed');

        return response('Database refreshed and seeded successfully!', 200);
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
