<?php

    namespace App\Http\Controllers\Category;

    use App\Http\Controllers\Controller;
    use App\Models\{Category, Post};

    class ShowController extends Controller
    {
        public function __invoke(Category $category)
        {
            $posts = $category->posts;

            return view('category.show', compact('category','posts'));
        }

    }
