<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Muestra lista de posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Muestra el formulario para crear un nuevo post
    public function create()
    {
        return view('posts.create');
    }

    // Guarda un nuevo post en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        // Forma segura: evita _token y otros extras
        Post::create($request->only(['title', 'content']));

        return redirect()->route('posts.index')->with('success', 'Post creado correctamente.');
    }

    // Muestra un único post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Muestra el formulario para editar un post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Actualiza un post existente
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        $post->update($request->only(['title', 'content']));

        return redirect()->route('posts.index')->with('success', 'Post actualizado correctamente.');
    }

    // Elimina un post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminado.');
    }
}