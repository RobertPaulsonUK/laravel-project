<?php

    namespace App\Http\Controllers\Category;

    use App\Http\Controllers\Controller;
    use App\Models\{Category, Post};

    class IndexController extends Controller
    {
        public function __invoke()
        {
            $categories = Category::query()->paginate(5);

            return view('category.index', ['paginate' => Category::query()->paginate(5)]);
        }

    }
