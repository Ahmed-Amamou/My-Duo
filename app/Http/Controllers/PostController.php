<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request,Game $game)
    {
        $validatedData=$request->validate([
            'title'=>'required|max:255',
            'body'=>'required',
            ]);
        $post=new Post($validatedData);
        $post->user_id=auth()->id();
        $game->posts()->save($post);

        return redirect()->back()->with('success','Post added successfully');
    }
}
