<?php

namespace App\Http\Controllers;

use App\Models\format;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class FormationController extends Controller
{
    
    
    public function index() {
        //On récupère tous les formation
        $formations = Formation::latest()->get();
    
        // On transmet les formation à la vue
        return view("formations.index", compact("formations"));
    }


   /* public function show($id){
        $data= Formation::all();
        $formations = $data[$id] ?? 'pas de formations';
        return view('formation',[
            'formation'=>$formations
        ]);
    }

    */
    public function show(formation $formation) {
        return view("formations.show", compact("formation"));
    }

    public function create() {
        // On retourne la vue "/resources/views/formations/edit.blade.php"
        return view("formations.edit");
    }
    
    public function store(Request $request) {
        // 1. La validation
        $this->validate($request, [
            'title' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "content" => 'bail|required',
        ]);
    
        // 2. On upload l'image dans "/storage/app/public/images"
        $chemin_image = $request->picture->store("images");
    
        // 3. On enregistre les informations du formation
        Formation::create([
            "title" => $request->title,
            "picture" => $chemin_image,
            "content" => $request->content,
        ]);
    
        // 4. On retourne vers tous les formations : route("formations.index")
        return redirect(route("formations.index"));
           
     /*   $data = $request->validate([
            'title' => 'bail|required|string|max:255',
            'picture' => 'bail|required|image|max:1024',
            'content' => 'bail|required',
        ]);

        Formation::create($data);

        return redirect(route('formations.index')); */
    }
   
  public function edit($id)
    {
        $formation = Formation::findOrFail($id);

        return view('formations.edit', compact('formation'));
    }


    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        $formation = Formation::findOrFail($id);

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('images', 'public');
        } else {
            unset($data['picture']); // Remove the picture field from data if no new image is uploaded
        }

        $formation->update($data);

        return redirect('formations')->with('success', 'Formation modifiée avec succès');
    }

   
    public function destroy($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();

        return redirect('/')->with('success', 'Formation supprimée avec succès');
    }

}