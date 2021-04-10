@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Posts</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-success mt-3">Create Post</a>

                    @foreach($posts as $post)
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->body }}</p>
                                <div>
                                    <small class="text-muted">{{ $post->user }}</small>
                                </div>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary mt-3">View Post</a>
                            </div>
                        </div>
                    @endforeach

            </div>
        </div>
    </div>
@endsection
