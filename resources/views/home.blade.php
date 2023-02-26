@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Dashboard</h1>
</div>
<div class="p-4">
    <div class="row mx-auto">
        @foreach ($posts as $post)
        {{-- @php
            dd($post->getFirstMediaUrl());
        @endphp --}}
        <div class="col-auto mb-3">
            <div class="card" style="width: 18rem; height: 25rem;">
                <img class="card-img-top" src="{{$post->getFirstMediaUrl()}}">
                {{-- @if($post->hasMedia())
                    <img class="card-img-top" src="{{$post->getFirstMedia()->getFirstMediaUrl()}}">
                @else
                    <img class="card-img-top" src="{{ 'https://source.unsplash.com/random/800x600' }}">
                @endif --}}
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                </div>
                <div class="card-footer d-flex justify-content-around bg-dark">
                    <button class="btn btn-success">Update</button>
                    <button class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
