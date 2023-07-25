<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations= Formation::all();
        return view('formations', compact('formations'));
    }
    
    public function show($id){
        $formations= Formation::paginate(6);
        $formation = $formations[$id] ?? 'pas de formations';
        return view('formation',[
            'formation'=>$formation
        ]);
    }
}
