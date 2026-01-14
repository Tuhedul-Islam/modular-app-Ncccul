<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\app\Http\Controllers\BlogController;

/*Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('blogs', BlogController::class)->names('blog');
});*/

Route::prefix('blog')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
});
