<?php

    use App\Http\Controllers\AboutController;
    use App\Http\Controllers\ContactsController;
    use App\Http\Controllers\MainController;
    use Illuminate\Support\Facades\Route;

    //Posts
    Route::group(['namespace'=>'App\Http\Controllers\Post'],function (){
        Route::get('/posts', IndexController::class)->name('post.index');
        Route::get('/posts/create', CreateController::class)->name('post.create');
        Route::post('/posts', StoreController::class)->name('post.store');
        Route::get('/posts/{post}', ShowController::class)->name('post.show');

        Route::get('/posts/edit/{post}', EditController::class)->name('post.edit');
        Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
        Route::delete('/posts/{post}', DestroyController::class)->name('post.destroy');
    });

//Categories
    Route::group(['namespace'=>'App\Http\Controllers\Category'],function () {
        Route::get('categories', IndexController::class)->name('category.index');
        Route::get('categories/create', CreateController::class)->name('category.create');
        Route::post('categories', StoreController::class)->name('category.store');
        Route::get('categories/{category}', ShowController::class)->name('category.show');
        Route::post('categories/{id}', [DestroyController::class, 'index'])->name('category.destroy');

        Route::get('/categories/edit/{category}', EditController::class)->name('category.edit');
        Route::patch('/categories/{category}', UpdateController::class)->name('category.update');
    });
//Admin
    Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix' => 'admin'],function () {
        Route::group(['namespace'=>'Post'],function () {
            Route::get('/posts', IndexController::class)->name('admin.post.index');
            Route::get('/posts/create', CreateController::class)->name('admin.post.create');
            Route::post('/posts', StoreController::class)->name('admin.post.store');
            Route::get('/posts/{post}', ShowController::class)->name('admin.post.show');

            Route::get('/posts/edit/{post}', EditController::class)->name('admin.post.edit');
            Route::patch('/posts/{post}', UpdateController::class)->name('admin.post.update');
            Route::delete('/posts/{post}', DestroyController::class)->name('admin.post.destroy');
        });
        Route::group(['namespace'=>'Category'],function () {
            Route::get('categories', IndexController::class)->name('admin.category.index');
            Route::get('categories/create', CreateController::class)->name('admin.category.create');
            Route::post('categories', StoreController::class)->name('admin.category.store');
            Route::get('categories/{category}', ShowController::class)->name('admin.category.show');
            Route::post('categories/{id}', [DestroyController::class, 'index'])->name('admin.category.destroy');

            Route::get('/categories/edit/{category}', EditController::class)->name('admin.category.edit');
            Route::patch('/categories/{category}', UpdateController::class)->name('admin.category.update');
        });
    });



    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/', [MainController::class, 'index'])->name('main.index');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');

