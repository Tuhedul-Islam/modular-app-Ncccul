<?php

use App\Http\Controllers\Admin\CustomerService\AccountOpenController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

//Clear All Cache
Route::get('clear', function () {
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    return response()->json(['message' => 'All caches cleared successfully!']);
})->name('clear.cache');


Route::group(['middleware' => 'auth'], function () {
    //========== Account Open =====================
    Route::prefix('admin/customer-services')->group(function () {
        Route::get('/account-open', [AccountOpenController::class, 'index'])
            ->name('account-open.index');
        Route::get('/account-open/list', [AccountOpenController::class, 'list'])
            ->name('account-open.list');
        Route::get('/account-open/create', [AccountOpenController::class, 'create'])
            ->name('account-open.create');
        Route::post('/account-open/store', [AccountOpenController::class, 'store'])
            ->name('account-open.store');
        Route::get('/account-open/edit/{id}', [AccountOpenController::class, 'edit'])
            ->name('account-open.edit');
        Route::post('/account-open/update/{id}', [AccountOpenController::class, 'update'])
            ->name('account-open.update');
        Route::post('/account-open/destroy', [AccountOpenController::class, 'destroy'])
            ->name('account-open.destroy');
    });


    //========== Loan Sanction =====================
    //========== Loan Sanction-> Loan Request ========
    Route::get('/admin/loan-management/loan-request/index', function () {
        return view('admin.loan-management.loan-request.index');
    })->name('loan-management.loan-request');
    Route::get('/admin/collection-department/collection-all/index', function () {
        return view('admin.collection-department.collection-all.index');
    })->name('collection-department.collection-all');
});


