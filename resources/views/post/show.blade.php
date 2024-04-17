@extends('layouts.main')
@section('content')
    <style>
        .back-link,.edit-link,.delete-link {
            display: inline-block;
            margin: 50px 0 0 0;
            max-width: fit-content;
            width: 100%;
            text-align: center;
            border: 1px solid #0a58ca;
            border-radius: 5px;
            padding: 10px;
        }
        .edit-link {
            color: #ffffff;
            background-color: #0a58ca;
        }
        .delete-link {
            color: #ffffff;
            background-color: red;
        }
        .title {
            color: #0a58ca;
            font-size: 22px;
            margin-top: 20px;
        }
    </style>
    <div class="container">
        <div>
            <h2 class="title">Title</h2>
            <div>{{$post->id}}.{{$post->title}}</div>
            <h2 class="title">Content</h2>
            <div>{{$post->content}}</div>
            <h2 class="title">Likes Count</h2>
            <div>{{$post->likes}}</div>
            <h2 class="title">Image</h2>
            <div>{{$post->image}}</div>
            @if($category)
                <h2 class="title">Category</h2>
                <div><a href="{{route('category.show',$category->id)}}">{{$category->title}}</a></div>
            @endif
            @if($tags)
                <h2 class="title">Tags</h2>
                <div>
                @foreach($tags as $tag)
                    <span>#{{$tag->title}}</span>
                @endforeach
                </div>
            @endif

        </div>
        <a class="edit-link" href="{{route('post.edit',$post->id)}}">Edit post data</a>
        <a class="back-link" href="{{route('post.index')}}">Back to all posts</a>
        <form method="POST" action="{{route('post.destroy',$post->id)}}">
            @csrf
            @method('DELETE')
            <button class="delete-link" type="submit" >Delete post</button>
        </form>

    </div>
@endsection
