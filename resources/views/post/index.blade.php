@extends('layouts.main')
@section('content')
    <style>
        .create-link {
            display: block;
            margin: 50px 0 50px 0;
            max-width: fit-content;
            width: 100%;
            text-align: center;
            border: 1px solid #0a58ca;
            border-radius: 5px;
            padding: 10px;
        }

    </style>
    <div class="container">
        <div><a class="create-link" href="{{route('post.create')}}">Create post</a></div>
        <div>
        @foreach($posts as $post)
            <div><a href="{{route('post.show',$post->id)}}">{{$post->id}}.{{$post->title}}</a></div>
        @endforeach
        </div>
    </div>
@endsection
