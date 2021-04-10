@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->body }}</p>
                        <hr />
                        <h4>Comments</h4>
                            @foreach($post->comments as $comment)
                                <div class="mt-3">
                                    <div>{{ $comment->body }}</div>
                                    <small>{{ $comment->name }}</small>
                                </div>
                            @endforeach
                        <hr />
                        <h4>Add comment</h4>
                        <form method="post" action="{{ route('comments.store') }}">
                            @csrf
                            <div class="form-group">
                                <label class="label">Name: </label>
                                <input name="name" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="body"></textarea>
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Add Comment" />
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6 d-flex mt-3 mx-auto">
                <a href="{{ route('posts.edit', $post->id) }}"><button class="btn btn-primary mr-3">Edit</button></a>
                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a><button type="submit" class="btn btn-danger">Delete Post</button></a>
                </form>
            </div>
        </div>

    </div>
@endsection
