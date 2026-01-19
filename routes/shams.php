<?php

use App\Http\Controllers\Admin\Administrative\BloodGroupController;
use App\Http\Controllers\Admin\Administrative\DepartmentController;
use App\Http\Controllers\Admin\Administrative\DesignationController;
use App\Http\Controllers\Admin\Administrative\DistrictController;
use App\Http\Controllers\Admin\Administrative\DivisionController;
use App\Http\Controllers\Admin\Administrative\FinancialYearController;
use App\Http\Controllers\Admin\Administrative\GenderController;
use App\Http\Controllers\Admin\Administrative\MaritalStatusController;
use App\Http\Controllers\Admin\Administrative\OccupationTypeController;
use App\Http\Controllers\Admin\Administrative\UpazilaController;
use App\Http\Controllers\Admin\Administrative\UserTypeController;
use Illuminate\Support\Facades\Route;

/***
 * Admin Routes2
 * ===================
 */
Route::group(['middleware' => 'auth'], function () {
    //UserType
    Route::get('/admin/administrative/user-type', [UserTypeController::class, 'index'])
        ->name('admin.administrative.user-type.index');
    Route::post('/admin/administrative/user-type/save', [UserTypeController::class,'store'])
        ->name('admin.administrative.user-type.store');
    Route::put('/admin/administrative/user-type/update/{id}', [UserTypeController::class,'update'])
        ->name('admin.administrative.user-type.update');
    Route::post('/admin/administrative/user-type/destroy', [UserTypeController::class,'destroy'])
        ->name('admin.administrative.user-type.destroy');

    //Department
    Route::get('/admin/administrative/department', [DepartmentController::class,'index'])
        ->name('admin.administrative.department.index');
    Route::post('/admin/administrative/department/save', [DepartmentController::class,'store'])
        ->name('admin.administrative.department.store');
    Route::put('/admin/administrative/department/update/{id}', [DepartmentController::class,'update'])
        ->name('admin.administrative.department.update');
    Route::post('/admin/administrative/department/destroy', [DepartmentController::class,'destroy'])
        ->name('admin.administrative.department.destroy');

    //Designation
    Route::get('/admin/administrative/designation', [DesignationController::class,'index'])
        ->name('admin.administrative.designation.index');
    Route::post('/admin/administrative/designation/save', [DesignationController::class,'store'])
        ->name('admin.administrative.designation.store');
    Route::put('/admin/administrative/designation/update/{id}', [DesignationController::class,'update'])
        ->name('admin.administrative.designation.update');
    Route::post('/admin/administrative/designation/destroy', [DesignationController::class,'destroy'])
        ->name('admin.administrative.designation.destroy');

    //Division
    Route::get('/admin/administrative/division', [DivisionController::class,'index'])
        ->name('admin.administrative.division.index');
    Route::post('/admin/administrative/division/save', [DivisionController::class,'store'])
        ->name('admin.administrative.division.store');
    Route::put('/admin/administrative/division/update/{id}', [DivisionController::class,'update'])
        ->name('admin.administrative.division.update');
    Route::post('/admin/administrative/division/destroy', [DivisionController::class,'destroy'])
        ->name('admin.administrative.division.destroy');

    //District
    Route::get('/admin/administrative/district', [DistrictController::class,'index'])
        ->name('admin.administrative.district.index');
    Route::post('/admin/administrative/district/save', [DistrictController::class,'store'])
        ->name('admin.administrative.district.store');
    Route::put('/admin/administrative/district/update/{id}', [DistrictController::class,'update'])
        ->name('admin.administrative.district.update');
    Route::post('/admin/administrative/district/destroy', [DistrictController::class,'destroy'])
        ->name('admin.administrative.district.destroy');

    //Upazila
    Route::get('/admin/administrative/upazila', [UpazilaController::class,'index'])
        ->name('admin.administrative.upazila.index');
    Route::post('/admin/administrative/upazila/save', [UpazilaController::class,'store'])
        ->name('admin.administrative.upazila.store');
    Route::put('/admin/administrative/upazila/update/{id}', [UpazilaController::class,'update'])
        ->name('admin.administrative.upazila.update');
    Route::post('/admin/administrative/upazila/destroy', [UpazilaController::class,'destroy'])
        ->name('admin.administrative.upazila.destroy');

    //Occupation
    Route::get('/admin/administrative/occupation-type', [OccupationTypeController::class,'index'])
        ->name('admin.administrative.occupation-type.index');
    Route::post('/admin/administrative/occupation-type/save', [OccupationTypeController::class,'store'])
        ->name('admin.administrative.occupation-type.store');
    Route::put('/admin/administrative/occupation-type/update/{id}', [OccupationTypeController::class,'update'])
        ->name('admin.administrative.occupation-type.update');
    Route::post('/admin/administrative/occupation-type/destroy', [OccupationTypeController::class,'destroy'])
        ->name('admin.administrative.occupation-type.destroy');

    //Gender
    Route::get('/admin/administrative/gender', [GenderController::class,'index'])
        ->name('admin.administrative.gender.index');
    Route::post('/admin/administrative/gender/save', [GenderController::class,'store'])
        ->name('admin.administrative.gender.store');
    Route::put('/admin/administrative/gender/update/{id}', [GenderController::class,'update'])
        ->name('admin.administrative.gender.update');
    Route::post('/admin/administrative/gender/destroy', [GenderController::class,'destroy'])
        ->name('admin.administrative.gender.destroy');

    //BloodGroup
    Route::get('/admin/administrative/blood-group',  [BloodGroupController::class,'index'])
        ->name('admin.administrative.blood-group.index');
    Route::post('/admin/administrative/blood-group/save',  [BloodGroupController::class,'store'])
        ->name('admin.administrative.blood-group.store');
    Route::put('/admin/administrative/blood-group/update/{id}',  [BloodGroupController::class,'update'])
        ->name('admin.administrative.blood-group.update');
    Route::post('/admin/administrative/blood-group/destroy',  [BloodGroupController::class,'destroy'])
        ->name('admin.administrative.blood-group.destroy');

    //MaritalStatus
    Route::get('/admin/administrative/marital-status', [MaritalStatusController::class,'index'])
        ->name('admin.administrative.marital-status.index');
    Route::post('/admin/administrative/marital-status/save', [MaritalStatusController::class,'store'])
        ->name('admin.administrative.marital-status.store');
    Route::put('/admin/administrative/marital-status/update/{id}', [MaritalStatusController::class,'update'])
        ->name('admin.administrative.marital-status.update');
    Route::post('/admin/administrative/marital-status/destroy', [MaritalStatusController::class,'destroy'])
        ->name('admin.administrative.marital-status.destroy');

    //FinancialYear
    Route::get('/admin/administrative/financial-year', [FinancialYearController::class,'index'])
        ->name('admin.administrative.financial-year.index');
    Route::post('/admin/administrative/financial-year/save', [FinancialYearController::class,'store'])
        ->name('admin.administrative.financial-year.store');
    Route::put('/admin/administrative/financial-year/update/{id}', [FinancialYearController::class,'update'])
        ->name('admin.administrative.financial-year.update');
    Route::post('/admin/administrative/financial-year/destroy', [FinancialYearController::class,'destroy'])
        ->name('admin.administrative.financial-year.destroy');
});


