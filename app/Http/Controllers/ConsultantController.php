<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Consultant;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function store(Request $request){
        Consultant::create([
            'name' => $request->name,
            'position' => $request->position,
            'industry' => $request->industry,
            'expertise' => $request->expertise,
            'hourlyRate' => $request->hourlyRate,
            'availability' => $request->availability,
        ]);

        return redirect(route('welcome'));
    }

    public function addConsultant(){
        return view('addConsultant');
    }
}
