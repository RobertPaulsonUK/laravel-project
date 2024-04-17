<?php

    namespace App\Http\Controllers\Admin\Post;

    use App\Http\Controllers\Controller;
    use App\Models\{Category, Tag};

    class CreateController extends Controller
    {
        public function __invoke()
        {
            $categories = Category::all();
            $tags = Tag::all();
            return view('admin.post.create',compact('categories','tags'));
        }

    }
