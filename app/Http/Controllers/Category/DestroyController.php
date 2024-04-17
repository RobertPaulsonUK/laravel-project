<?php

    namespace App\Http\Controllers\Category;

    use App\Http\Controllers\Controller;
    use App\Models\Category;
    use App\Models\Post;


    class DestroyController extends Controller
    {

        public function index(int $id)
        {
             Category::destroy($id);

            return redirect(route('category.index'));
        }

    }
