@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">Edit Post</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('posts.update', $post->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="hidden" name="user" class="form-control" value="{{ Auth::user()->name }}" required />
                            </div>
                            <div class="form-group">
                                <label class="label">Title: </label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required />
                            </div>
                            <div class="form-group">
                                <label class="label">Body: </label>
                                <input name="body" rows="10" cols="20" class="form-control" value="{{ $post->body }}" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
