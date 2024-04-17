<?php

    namespace App\Http\Controllers\Post;

    use App\Http\Controllers\Controller;
    use App\Models\{Category, Post};

    class ShowController extends Controller
    {
        public function __invoke(Post $post)
        {
            $category = Category::find($post->category_id);

            $tags = $post->tags;
            return view('post.show', compact('post','category','tags'));
        }

    }
