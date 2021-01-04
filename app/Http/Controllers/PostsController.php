<?php

namespace App\Http\Controllers;
use App\Models\Post;


class PostsController extends Controller
{
    public function index(){
        $posts=Post::orderBy('created_at', 'DESC')
            ->take(10)
            ->get();
        return view('posts.index', compact('posts'));
    }

    public function show (Post $post){
     //$post=Post::find($post);

        return view('posts.show', compact ('post'));
    }
}
