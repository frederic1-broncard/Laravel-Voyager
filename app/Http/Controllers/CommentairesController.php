<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\View;
use App\Models\Commentaire as CmtsMdl;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{





    public function index() {
        $commentaires = CmtsMdl::orderBy('created_at','desc')->get();
        return view::make ('commentaires.index', compact('commentaires'));
    }



    public function ajaxInsert (Request $request) {
        $commentaire = new CmtsMdl;
        $commentaire->author= $request->input('pseudo');
        $commentaire->content  = $request->input('text');
        $commentaire->save();
        return view('commentaires._component', compact('commentaire'));
    }

}
