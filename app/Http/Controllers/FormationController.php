<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FormationController extends Controller
{
    public function index()
    {
        $formations= Formation::paginate(3);
        return view('formations', compact('formations'));
    }
    
    public function show($id){
        $data= Formation::all();
        $formations = $data[$id] ?? 'pas de formations';
        return view('formation',[
            'formation'=>$formations
        ]);
    }

    public function create() {
        // On retourne la vue "/resources/views/posts/edit.blade.php"
        return view("posts.edit");
    }
    
    public function store(Request $request) {
        // 1. La validation
        $this->validate($request, [
            'title' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "content" => 'bail|required',
        ]);
    
        // 2. On upload l'image dans "/storage/app/public/posts"
        $chemin_image = $request->picture->store("posts");
    
        // 3. On enregistre les informations du Post
        Post::create([
            "title" => $request->title,
            "picture" => $chemin_image,
            "content" => $request->content,
        ]);
    
        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect(route("posts.index"));
    }
}
