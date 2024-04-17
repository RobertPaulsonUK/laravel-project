@extends('layouts.main')
@section('content')
<div class="container">
    <div>
        <h1 class="text-blue-900 justify-center mb-5 font-bold text-2xl	text-center	">Crating a category</h1>
        <div class="container">
            <form method="POST" action="{{route('category.store')}}" class="flex flex-col h-full bg-blue-700 max-w-60 my-0 mx-auto">
                @csrf
                <input value="{{ old('title') }}" class=" inline-block" type="text" name="title" id="form-title" placeholder="Title">
                @error('title')
                <p class="error-message">{{$message}}</p>
                @enderror

                <button class="btn" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
