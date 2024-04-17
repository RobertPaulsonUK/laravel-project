<?php

    namespace App\Http\Controllers\Admin\Category;

    use App\Http\Controllers\Controller;
    use App\Models\{Category, Post};

    class IndexController extends Controller
    {
        public function __invoke()
        {
            $categories = Category::query()->paginate(5);

            return view('admin.category.index', ['paginate' => Category::query()->paginate(5)]);
        }

    }
