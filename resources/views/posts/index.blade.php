@extends('layouts.app')

@section('content')
    <style>
        /* Contenedor del blog */
        .blog-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        /* Estilo para cada tarjeta de película */
        .movie-container {
            width: 300px;
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .movie-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Título de la película */
        .movie-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        /* Imagen de la película */
        .movie-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Descripción de la película */
        .movie-description {
            font-size: 14px;
            line-height: 1.6;
            color: #555;
        }
    </style>

    <div class="container">
        <div class="titlebar">
            <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">agregar</a>
            <h1>blog</h1>
        </div>

        <hr>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if (count($posts) > 0)
            <div class="blog-container">
                @foreach ($posts as $post)
                    <div class="movie-container">
                        <h4 class="movie-title">{{ strtoupper($post->title) }}</h4>
                        <img class="movie-image" src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}">
                        <p class="movie-description">{{ $post->description }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p>No Posts found</p>
        @endif
    </div>
@endsection
