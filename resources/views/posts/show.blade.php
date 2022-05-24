@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="d-flex d-flex justify-content-between mb-3">
            <a href="{{ route('posts.show', ['id' => $post->id - 1]) }}">
                <- Previous Post</a><br>
                    <a href="{{ route('posts.show', ['id' => $post->id + 1]) }}">Next Post -></a>
        </nav>
        <div>
            <img class="w-100" src="{{ $post->img }}" alt="{{ $post->title }}">
            <h1 class="mt-3">{{ $post->title }}</h1>
            <div>
                @foreach ($post->categories as $category)
                    <span class="badge"
                        style="background-color: {{ $category->color }}">{{ $category->name }}</span>
                @endforeach
            </div>
            <span>{{ $post->author }}</span><br>
            <span>Created at: {{ $post->created_at }}</span>
            <p class="mt-3">{{ $post->text }}</p>
        </div>
        <nav>
            <a href="{{ route('posts.index') }}">
                <- Back to All Posts </a>
        </nav>
    </div>
@endsection
