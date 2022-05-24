@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Author</th>
                    <th scope="col">Text</th>
                    <th scope="col">Created</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></td>
                        <td>
                            @foreach ($post->categories as $category)
                                <span class="badge"
                                    style="background-color: {{ $category->color }}">{{ $category->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $post->author }}</td>
                        <td>{{ Str::of($post->text)->limit(40, '...') }}</td>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No posts to show</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
