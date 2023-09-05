<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\ListingController as FrontendListingController;
use App\Http\Controllers\Admin\ListingController as AdminListingsController;

use App\Http\Controllers\DropDownController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendListingController::class, 'welcome'])->name('welcome');

Route::get('/all-listings', [FrontendListingController::class, 'index'])
    ->name('all-listings');


Route::middleware(['auth:sanctum'])->prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminController::class, 'index'])->name('index');
Route::resource('listings', AdminListingsController::class);
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubCategoryController::class);
Route::resource('childcategories', ChildCategoryController::class);
Route::resource('countries', CountryController::class);
Route::resource('states', StateController::class);
Route::resource('cities', CityController::class);
});

Route::get('dropdown',[DropDownController::class,'index']);
Route::post('api/fetch-state',[DropDownController::class,'fatchState']);
Route::post('api/fetch-cities',[DropDownController::class,'fatchCity']);

Route::resource('listings', ListingController::class)->middleware('auth');
Route::resource('dashboard', UserController::class)->middleware('auth');
