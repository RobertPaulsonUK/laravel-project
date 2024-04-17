<?php

    namespace App\Http\Controllers\Admin\Category;

    use App\Http\Controllers\Controller;
    use App\Models\{Category};

    class StoreController extends Controller
    {
        public function __invoke()
        {
            $data = request()->validate([
                'title'   => 'required|string',
            ]);

            Category::firstOrCreate($data);

            return redirect(route('admin.category.index'));
        }

    }
