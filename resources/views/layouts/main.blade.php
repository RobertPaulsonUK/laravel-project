<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="p-10 bg-blue-700">
        <div class="container">
        <nav>
            <ul class="flex justify-center gap-5">
                <li>
                    <a class="text-xl text-cyan-50" href="{{route('main.index')}}">Main</a>
                </li>
                <li>
                    <a class="text-xl text-cyan-50" href="{{route('post.index')}}">Posts</a>
                </li>
                <li>
                    <a class="text-xl text-cyan-50" href="{{route('about.index')}}">About</a>
                </li>
                <li>
                    <a class="text-xl text-cyan-50" href="{{route('contacts.index')}}">Contacts</a>
                </li>
            </ul>
        </nav>
        </div>
    </header>
    @yield('content')
</body>
</html>
