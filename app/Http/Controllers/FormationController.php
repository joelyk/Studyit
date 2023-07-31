<?php

namespace App\Http\Controllers;

use App\Models\Personne;
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
    
        // 2. On upload l'image dans "/storage/app/public/formations"
        $chemin_image = $request->picture->store("formations");
    
        // 3. On enregistre les informations du formation
        Formation::create([
            "title" => $request->title,
            "picture" => $chemin_image,
            "content" => $request->content,
        ]);
    
        // 4. On retourne vers tous les formations : route("formations.index")
        return redirect(route("formations"));
    }
    public function edit(formation $formation) {
        return view("formations.edit", compact("formation"));
    }

    public function update(Request $request, formation $formation) {
        // 1. La validation
    
        // Les règles de validation pour "title" et "content"
        $rules = [
            'title' => 'bail|required|string|max:255',
            "content" => 'bail|required',
        ];
    
        // Si une nouvelle image est envoyée
        if ($request->has("picture")) {
            // On ajoute la règle de validation pour "picture"
            $rules["picture"] = 'bail|required|image|max:1024';
        }
    
        $this->validate($request, $rules);
    
        // 2. On upload l'image dans "/storage/app/public/formations"
        if ($request->has("picture")) {
    
            //On supprime l'ancienne image
            Storage::delete($formation->picture);
    
            $chemin_image = $request->picture->store("formations");
        }
    
        // 3. On met à jour les informations du formation
        $formation->update([
            "title" => $request->title,
            "picture" => isset($chemin_image) ? $chemin_image : $formation->picture,
            "content" => $request->content
        ]);
    
        // 4. On affiche le formation modifié : route("formations.show")
        return redirect(route("formations.show", $formation));
    }

    public function destroy(formation $formation) {
        // On supprime l'image existant
        Storage::delete($formation->picture);
    
        // On les informations du $formation de la table "formations"
        $formation->delete();
    
        // Redirection route "formations.index"
        return redirect(route('formations.index'));
    }
}
