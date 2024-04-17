<?php

    namespace App\Http\Controllers\Category;

    use App\Http\Controllers\Controller;
    use App\Models\{Category};

    class UpdateController extends Controller
    {
        public function __invoke(Category $category)
        {
            $data = request()->validate([
                'title'   => 'string',
            ]);

            $category->update($data);

            return redirect(route('category.show', $category->id));
        }

    }
