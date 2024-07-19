<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:300',
        ]);

        Auth::user()->posts()->create($request->only('content'));

        return redirect()->route('posts.index');
    }
}
