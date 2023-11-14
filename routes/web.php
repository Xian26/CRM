<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ResponController;
use App\Http\Controllers\JobTitleController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job-title', [JobTitleController::class, 'index'])->name('job-title');
Route::get('/job-title/getData', [JobTitleController::class, 'getData'])->name('job-title.getData');
Route::get('/job-title/add', [JobTitleController::class, 'create'])->name('job-title.add');
Route::post('/job-title/save', [JobTitleController::class, 'store'])->name('job-title.save');
Route::get('/job-title/edit/{id}', [JobTitleController::class, 'edit'])->name('job-title.edit');
Route::put('/job-title/update/{id}', [JobTitleController::class, 'update'])->name('job-title.update');
Route::delete('/job-title/delete', [JobTitleController::class, 'destroy'])->name('job-title.delete');

Route::get('/respon', [ResponController::class, 'index'])->name('respon');
Route::get('/respon/getData', [ResponController::class, 'getData'])->name('respon.getData');
Route::get('/respon/add', [ResponController::class, 'create'])->name('respon.add');
Route::post('/respon/save', [ResponController::class, 'store'])->name('respon.save');
Route::get('/respon/edit/{id}', [ResponController::class, 'edit'])->name('respon.edit');
Route::put('/respon/update/{id}', [ResponController::class, 'update'])->name('respon.update');
Route::delete('/respon/delete', [ResponController::class, 'destroy'])->name('respon.delete');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu/getData', [MenuController::class, 'getData'])->name('menu.getData');
Route::get('/menu/add', [MenuController::class, 'create'])->name('menu.add');
Route::post('/menu/save', [MenuController::class, 'store'])->name('menu.save');
Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/menu/delete', [MenuController::class, 'destroy'])->name('menu.delete');


Route::get('home', function () {
    return view('main');
});
