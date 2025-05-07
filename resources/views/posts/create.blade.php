@extends('layout')

@section('content')
    <h1>Nuevo Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label>Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="mb-2">
            <label>Contenido</label>
            <textarea name="content" class="form-control">{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection