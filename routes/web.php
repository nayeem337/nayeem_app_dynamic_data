<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[WelcomeController::class, 'index'])->name('home');
Route::get('/about',[WelcomeController::class, 'about'])->name('about')->middleware('dashboard');
Route::get('/contact',[WelcomeController::class, 'contact'])->name('contact');
Route::get('/detail/{id}',[WelcomeController::class, 'detail'])->name('detail');
Route::get('/blog-category/{id}',[WelcomeController::class, 'category'])->name('blog-category');
Route::post('/make-full-name',[WelcomeController::class, 'makeFullName'])->name('make-full-name');
Route::get('/password-generator',[WelcomeController::class, 'passwordGenerator'])->name('password-generator')->middleware('dashboard');
Route::post('/make-password',[WelcomeController::class, 'makePassword'])->name('make-password');


Route::get('/login',[AuthController::class, 'index'])->name('login')->middleware('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');


Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('dashboard');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');





Route::middleware(['dashboard'])->group(function () {

    Route::get('/blog/add',[BlogController::class, 'index'])->name('blog.add');
    Route::post('/blog-create',[BlogController::class, 'create'])->name('blog.create');
    Route::get('blog/manage',[BlogController::class, 'manage'])->name('blog.manage');
    Route::get('blog/edit/{id}',[BlogController::class, 'edit'])->name('blog.edit');
    Route::post('blog/update/{id}',[BlogController::class, 'update'])->name('blog.update');
    Route::get('blog/delete/{id}',[BlogController::class, 'delete'])->name('blog.delete');


    Route::get('category/add',[CategoryController::class, 'index'])->name('category.add');
    Route::post('category/create',[CategoryController::class, 'create'])->name('category.create');
    Route::get('category/manage',[CategoryController::class, 'manage'])->name('category.manage');
    Route::get('category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/update/{id}',[CategoryController::class, 'update'])->name('category.update');
    Route::get('category/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');

});









