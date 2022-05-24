@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- If user is logged --}}
                        @if (Auth::check())
                            Welcome {{ Auth::user()->name }}!
                        @else
                            Welcome Guest!
                        @endif

                    </div>
                    @if (Auth::check())
                        <div class=" card-footer">
                            <a href="{{ route('posts.index') }}" class="btn btn-dark">Show posts</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
