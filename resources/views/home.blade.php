@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Dashboard</h1>
</div>
<div class="p-4">
    <div class="row mx-auto pt-4  bg-black">
        @foreach ($posts as $post)
        <div class="col-auto mb-3 mx-auto">
            <div class="card" style="width: 18rem;">
                {{-- <img class="card-img-top" src="{{$post->getFirstMediaUrl()}}"> --}}
                @if($post->hasMedia())
                    <img class="card-img-top" style="height: 18rem;" src="{{$post->getFirstMediaUrl()}}">
                @else
                    <img class="card-img-top" style="height: 18rem;" src="{{ 'https://source.unsplash.com/random/800x600' }}">
                @endif
                <div class="p-2">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
