@extends('layouts.admin')
@section('content')
<div class="container">
    <div>
        <h1 class="text-blue-900 justify-center mb-5 font-bold text-2xl	text-center	">Categories</h1>
        @if($paginate)
            @foreach($paginate->items() as $item)
                <div>{{$item->id}}. <a href="{{route('admin.category.show',$item->id)}}">{{$item->title}}</a></div>

            @endforeach

        @endif
        <div class="mt-5">
        <a href="{{route('admin.category.create')}}" class="bg-blue-700 rounded-md border-lime-950 text-white p-2.5">Create new category</a>
        </div>

        <div>{{$paginate->links()}}</div>
    </div>
</div>


@endsection
