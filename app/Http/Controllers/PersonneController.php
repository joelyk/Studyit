<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Formation;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function index()
    {
        $personnes = Personne::all();
        return view('personnes', compact('personnes'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'education_level' => 'required',
            'field' => 'required',
            'specialization' => 'nullable',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'age' => 'nullable',
            'interests' => 'required',
            'career_project' => 'required',
            'stage_requirements' => 'required'
        ]);

        personne::create($data);

        return redirect(route('personnes.index'));
    }

    public function edit($id)
    {
        $personne = personne::findOrFail($id);

        return view('edit', compact('personne'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'education_level' => 'required',
            'field' => 'required',
            'specialization' => 'nullable',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'age' => 'nullable',
            'interests' => 'required',
            'career_project' => 'required',
            'stage_requirements' => 'required'
        ]);

        $personne = personne::findOrFail($id);
        $personne->update($data);

        return redirect('/')->with('success', 'personne modifié avec succès');
    }

    public function destroy($id)
    {
        $personne = personne::findOrFail($id);
        $personne->delete();

        return redirect('/')->with('success', 'personne supprimé avec succès');
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $personnes = personne::query()
            ->where('first_name', 'like', "%{$key}%")
            ->orWhere('last_name', 'like', "%{$key}%")
            ->orWhere('gender', 'like', "%{$key}%")
            ->orWhere('education_level', 'like', "%{$key}%")
            ->orWhere('field', 'like', "%{$key}%")
            ->orWhere('specialization', 'like', "%{$key}%")
            ->orWhere('address', 'like', "%{$key}%")
            ->orWhere('phone_number', 'like', "%{$key}%")
            ->orWhere('email', 'like', "%{$key}%")
            ->orWhere('age', 'like', "%{$key}%")
            ->orWhere('interests', 'like', "%{$key}%")
            ->orWhere('career_project', 'like', "%{$key}%")
            ->orWhere('stage_requirements', 'like', "%{$key}%")
            ->get();

        return view('search', compact('personnes', 'key'));
    }

   
}
