@extends('layouts.admin')
@section('content')
<div class="container">
    <div>
        <h1 class="text-blue-900 justify-center mb-5 font-bold text-2xl	text-center	">Category - <span>{{$category->title}}</span></h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="post">{{$loop->index + 1}}. <a class="underline" href="{{route('admin.post.show',$post->id)}}">{{$post->title}}</a></div>
            @endforeach
        @else
            <div>No posts found</div>
        @endif
        <div class="flex flex-col justify-around items-start gap-3 mt-4">
            <a href="{{route('admin.category.index')}}" class="bg-blue-700 rounded-md border-lime-950 text-white p-2.5">Show all categories</a>
            <a href="{{route('admin.category.edit',$category->id)}}" class="bg-blue-700 rounded-md border-lime-950 text-white p-2.5">Rename category</a>

            <form method="POST" action="{{route('admin.category.destroy',$category->id)}}">
                @csrf
                @method('POST')
                <button type="submit" class="bg-red-500 rounded-md border-lime-950 text-white p-2.5">Delete this category</button>
            </form>
        </div>
    </div>
</div>


@endsection
