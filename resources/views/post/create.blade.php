@extends('layouts.main')
@section('content')
<section>
    <style>
        .error-message {
            color: red;
        }
        form {
            max-width: 400px;
            width: 100%;
            margin: 100px auto 0;
            gap: 20px;
            padding: 40px;
            border-radius: 20px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #ffffff;
            border-radius: 10px;

        }
        input {
            height: 50px;
            background-color: #ffffff;
            color: #000000;
            font-size: 18px;
            line-height: 24px;
            padding: 5px;
            border-radius: 5px;
        }
        textarea {
            height: 100px;
            width: 100%;
            background-color: #ffffff;
            color: #000000;
            font-size: 18px;
            line-height: 24px;
            padding: 5px;
            border-radius: 5px;
            resize: none;
        }
        label,.form-title {
            color: #ffffff;
            font-size: 20px;
            line-height: 26px;
            font-weight: 400;
        }
    </style>
    <div class="container">
        <form method="POST" action="{{route('post.store')}}" class="flex flex-col h-full bg-blue-700">
            @csrf
            <input value="{{ old('title') }}" class=" inline-block" type="text" name="title" id="form-title" placeholder="Title">
            @error('title')
            <p class="error-message">{{$message}}</p>
            @enderror
            <input value="{{ old('image') }}" class=" inline-block" type="text" name="image" id="form-image" placeholder="Image">
            @error('image')
            <p class="error-message">{{$message}}</p>
            @enderror
            <input value="{{ old('likes') }}" class=" inline-block" type="text" name="likes" id="form-likes" placeholder="Likes">
            @error('likes')
            <p class="error-message">{{$message}}</p>
            @enderror
            <textarea name="content" id="content" placeholder="content">{{ old('content') }}</textarea>
            @error('content')
            <p class="error-message">{{$message}}</p>
            @enderror
            @if($categories)
                <select name="category_id">
                    <option selected disabled value="">Choose the category</option>
                    @foreach($categories as $cat)
                        <option
                            {{old('category_id') == $cat->id ? 'selected' : ''}}
                            value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach
                </select>
            @endif
            <h2 class="form-title">Tags</h2>
            <div class="tags-wrapper">
                @foreach($tags as $tag)
                    <label for="tag-{{$tag->id}}">{{$tag->title}}</label>
                    <input name="tags[]" id="tag-{{$tag->id}}" value="{{$tag->id}}" type="checkbox" {{old('tags') != null && in_array($tag->id, old('tags')) ? 'checked' : ''}}>

                @endforeach
            </div>
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
</section>
@endsection

