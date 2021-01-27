<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{





    public function index() {
        $commentaires = Commentaire::orderBy('created_at','desc')->get();
        return view('commentaires.index', compact('commentaires'));
    }

    public function store(Request $request) {
        $commentaire = new Commentaire();
        $commentaire->pseudo = $request->pseudo;
        $commentaire->texte  = $request->texte;
        $commentaire->save();
        return view('commentaires._show', compact('commentaire'));
    }

    public function update(Commentaire $commentaire, Request $request) {
        //return "L'id du commentaire est : " . $commentaire->id;
        $commentaire->texte  = $request->texte;
        return $commentaire->save();
    }
    public function delete(Commentaire $commentaire, Request $request) {
        return "votre id est: " . $commentaire->id;
        //  $commentaire->texte  = $request->texte;
        // return $commentaire->save();
    }

}
