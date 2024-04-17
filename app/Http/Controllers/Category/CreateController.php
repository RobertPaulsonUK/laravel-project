<?php

    namespace App\Http\Controllers\Category;

    use App\Http\Controllers\Controller;
    use App\Models\{Category, Post};

    class CreateController extends Controller
    {
        public function __invoke()
        {
            return view('category.create');

        }

    }
