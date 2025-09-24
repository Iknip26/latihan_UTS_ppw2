<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//route resource
Route::resource('/posts', PostController::class)->names([
    'index' => 'posts.index',
    'create' => 'posts.create',
    'store' => 'posts.store',
    'show' => 'posts.show',
    'edit' => 'posts.edit',
    'update' => 'posts.update',
    'destroy' => 'posts.destroy',
]);


// Route::resource('/posts', PostController::class);


// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);


// Route::get('/posts', [PostController::class, 'index'])->name('posts.indek');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/destroy/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/secret', function(){
    return view('posts.secret');
}
)->name('secret');