@extends('layouts.main')
@section('content')
    <section>
        <style>
            form {
                max-width: 100%;
                width: 100%;
                margin: 50px auto 0;
                padding: 40px;
                border-radius: 20px;
            }
            .form-wrapper {
                display: flex;
                gap: 30px;
            }
            .form-row {
                display: flex;
                flex-direction: column;
                gap: 20px;
                flex: 1 1 50%;
            }
            .btn {
                padding: 10px 20px;
                background-color: #ffffff;
                border-radius: 10px;
                display: block;
                max-width: 200px;
                width: 100%;
                margin-top: 20px;

            }
            label,.form-title {
                color: #ffffff;
                font-size: 20px;
                line-height: 26px;
                font-weight: 400;
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
            input:focus {
                outline: none;
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
        </style>
        <div class="container">
            <form method="POST" action="{{route('post.update',$post->id)}}" class="form bg-blue-700">
                @csrf
                @method('patch')
                <div class="form-wrapper">
                <div class="form-row">
                <label for="form-title">Title</label>
                <input class=" inline-block" type="text" name="title" id="form-title" placeholder="Title" value="{{$post->title}}">
                <label for="form-image">Image</label>
                <input class=" inline-block" type="text" name="image" id="form-image" placeholder="Image" value="{{$post->image}}">
                <label for="form-likes">Likes</label>
                <input class=" inline-block" type="text" name="likes" id="form-likes" placeholder="Likes" value="{{$post->likes}}">
                <label for="content">Content</label>
                <textarea name="content" id="content">{{$post->content}}</textarea>
                </div>
                <div class="form-row">
                @if($categories)
                    <label for="category">Category</label>
                    <select name="category_id" id="category">
                        @foreach($categories as $cat)
                            <option {{$post->category != null && $cat->id === $post->category->id ? 'selected' : ''}}
                                   value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach
                    </select>
                @endif
                    <h2 class="form-title">Tags</h2>
                    <div class="tags-wrapper">
                        @foreach($all_tags as $tag)
                        <label for="tag-{{$tag->id}}">{{$tag->title}}</label>
                            <input name="tags[]" id="tag-{{$tag->id}}" value="{{$tag->id}}" type="checkbox" {{in_array($tag->id,$post_tags_id) ? 'checked' : ''}}>
                        @endforeach
                    </div>
                </div>
                </div>
                <button class="btn" type="submit">Edit</button>
            </form>
        </div>
    </section>
@endsection

