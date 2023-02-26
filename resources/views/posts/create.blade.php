@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Add a new post</h1>
    </div>
    <div class="container">
        <form enctype="multipart/form-data" method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter the post's title.">
            </div>
            <div class="form-group mt-2">
                <label for="body">Post body</label>
                <textarea type="text" name="body" class="form-control" id="body" placeholder="Enter everything about your post."></textarea>
            </div>
            <div class="form-group mt-2">
                <label for="image">Choose file</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Create</button>
          </form>
    </div>
@endsection