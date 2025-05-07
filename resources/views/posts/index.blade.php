@extends('layout')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Nuevo Post</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach($posts as $post)
        <div class="card mb-2">
            <div class="card-body">
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro?')">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection