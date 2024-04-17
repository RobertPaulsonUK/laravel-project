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
                flex-direction: column;
                gap: 30px;
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

        </style>
        <div class="container">
            <form method="POST" action="{{route('category.update',$category->id)}}" class="form bg-blue-700">
                @csrf
                @method('patch')
                <div class="form-wrapper">
                <label for="form-title">Title</label>
                <input class=" inline-block" type="text" name="title" id="form-title" placeholder="Title" value="{{$category->title}}">
                </div>
                <button class="btn" type="submit">Edit</button>
            </form>
        </div>
    </section>
@endsection

