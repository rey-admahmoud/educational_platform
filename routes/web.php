<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryfrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesCOntroller;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\checkadmin;
use App\Models\category;
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







Route::get('/', function () {
    return view('welcome');
});


// route cars
Route::get('cart/archive',[CarsController::class,'archive'])->name('cars.archive');
Route::post('cars/restore/{id}',[CarsController::class,'restore'])->name('cars.restore');
Route::delete('cars/delete/{id}',[CarsController::class,'forcedelete'])->name('cars.delete');
Route::resource('cars',CarsController::class);

//end route cars

// route category

Route::get('category/archive',[CarsController::class,'archive'])->name('category.archive');

Route::resource('category',CategoryController::class);

// route front pages

Route::get('home/contact',[ContactController::class,'contact'])->name('contact');

Route::get('home/about',[AboutController::class,'about'])->name('about');
Route::get('home/category',[CategoryfrontController::class,'category'])->name('category');

Route::resource('courses',CoursesCOntroller::class);

Route::get('login',[AuthController::class ,'login'])->name('login');
Route::get('register',[AuthController::class ,'register'])->name('register');
Route::post('adduser',[AuthController::class,'adduser'])->name('adduser');
Route::post('checklogin',[AuthController::class,'checklogin'])->name('checklogin');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::resource('home',HomeController::class);




