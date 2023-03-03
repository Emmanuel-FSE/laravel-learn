<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Fluent;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = new Fluent($request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]));
        // dd($validated);
        $post = new Post;
        $post->title = $validated->title;
        $post->body = $validated->body;
        if ($request->hasFile('image')) {
            $post->addMediaFromRequest('image')->toMediaCollection();
        }

        $post->save();

        return redirect('/home');
    }
}
