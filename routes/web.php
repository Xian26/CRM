<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ResponController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\JabatanIdController;
use App\Http\Controllers\DepartemenIdController;
use App\Http\Controllers\SalesActivityController;
use App\Http\Controllers\StatusProjectSellingController;

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

Route::get('/sales-activity', [SalesActivityController::class, 'index'])->name('sales-activity');
Route::get('/sales-activity/getData', [SalesActivityController::class, 'getData'])->name('sales-activity.getData');
Route::get('/sales-activity/add', [SalesActivityController::class, 'create'])->name('sales-activity.add');
Route::post('/sales-activity/save', [SalesActivityController::class, 'store'])->name('sales-activity.save');
Route::get('/sales-activity/edit/{id}', [SalesActivityController::class, 'edit'])->name('sales-activity.edit');
Route::put('/sales-activity/update/{id}', [SalesActivityController::class, 'update'])->name('sales-activity.update');
Route::delete('/sales-activity/delete', [SalesActivityController::class, 'destroy'])->name('sales-activity.delete');

Route::get('/status-project-selling', [StatusProjectSellingController::class, 'index'])->name('status-project-selling');
Route::get('/status-project-selling/getData', [StatusProjectSellingController::class, 'getData'])->name('status-project-selling.getData');
Route::get('/status-project-selling/add', [StatusProjectSellingController::class, 'create'])->name('status-project-selling.add');
Route::post('/status-project-selling/save', [StatusProjectSellingController::class, 'store'])->name('status-project-selling.save');
Route::get('/status-project-selling/edit/{id}', [StatusProjectSellingController::class, 'edit'])->name('status-project-selling.edit');
Route::put('/status-project-selling/update/{id}', [StatusProjectSellingController::class, 'update'])->name('status-project-selling.update');
Route::delete('/status-project-selling/delete', [StatusProjectSellingController::class, 'destroy'])->name('status-project-selling.delete');

Route::get('/departemen-id', [DepartemenIdController::class, 'index'])->name('departemen-id');
Route::get('/departemen-id/getData', [DepartemenIdController::class, 'getData'])->name('departemen-id.getData');
Route::get('/departemen-id/add', [DepartemenIdController::class, 'create'])->name('departemen-id.add');
Route::post('/departemen-id/save', [DepartemenIdController::class, 'store'])->name('departemen-id.save');
Route::get('/departemen-id/edit/{id}', [DepartemenIdController::class, 'edit'])->name('departemen-id.edit');
Route::put('/departemen-id/update/{id}', [DepartemenIdController::class, 'update'])->name('departemen-id.update');
Route::delete('/departemen-id/delete', [DepartemenIdController::class, 'destroy'])->name('departemen-id.delete');

Route::get('/jabatan-id', [JabatanIdController::class, 'index'])->name('jabatan-id');
Route::get('/jabatan-id/getData', [JabatanIdController::class, 'getData'])->name('jabatan-id.getData');
Route::get('/jabatan-id/add', [JabatanIdController::class, 'create'])->name('jabatan-id.add');
Route::post('/jabatan-id/save', [JabatanIdController::class, 'store'])->name('jabatan-id.save');
Route::get('/jabatan-id/edit/{id}', [JabatanIdController::class, 'edit'])->name('jabatan-id.edit');
Route::put('/jabatan-id/update/{id}', [JabatanIdController::class, 'update'])->name('jabatan-id.update');
Route::delete('/jabatan-id/delete', [JabatanIdController::class, 'destroy'])->name('jabatan-id.delete');

Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::get('/client/getData', [ClientController::class, 'getData'])->name('client.getData');
Route::get('/client/add', [ClientController::class, 'create'])->name('client.add');
Route::post('/client/save', [ClientController::class, 'store'])->name('client.save');
Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::get('/client/detail/{id}', [ClientController::class, 'show'])->name('client.detail');
Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
Route::delete('/client/delete', [ClientController::class, 'destroy'])->name('client.delete');

    

Route::get('home', function () {

return view('main');
});