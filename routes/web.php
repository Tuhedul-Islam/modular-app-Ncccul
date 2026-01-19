<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/***
 * Auth Routes
 * ===========
 */
Route::get('/', function () {
    return redirect('/login');
});
Auth::routes();
Route::controller(DashboardController::class)->group(function ($public) {
    $public->get('verification/notice', 'verificationNotice')->name('verification-notice');
    $public->get('verify/{token}', 'verify')->name('verify.user');

    $public->group(['middleware' => 'auth'], function ($protected) {
        $protected->get('/dashboard', 'index')->name('admin.dashboard');
    });
});


/***
 * Routes
 * ===================
 */
//Routes...
