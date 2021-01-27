<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\View;


/*pour récupérer des données get ou post je dois faire un "use illuminate\Http\Request;"*/

use illuminate\Http\Request;

class PostsController extends Controller
{
    public function index ()
    {
        $posts = Post ::orderBy ( 'created_at' , 'DESC' )
            -> take ( 10 )
            -> get ();
        return view ( 'posts.index' , compact ( 'posts' ) );
    }

    public function show ( Post $post )
    {
        //$post=Post::find($post);

        return view ( 'posts.show' , compact ( 'post' ) );
    }
/*##################################################################FACULTATIF##################################################################*/
/*
    public function ajaxOlders()
    {

        $posts = Post ::orderBy ( 'created_at' , 'DESC' )
            -> take ( 10 )
            -> get ();

        return ('coucou.php');

    }*/
    /*###########################################################################################################################################*/
}
