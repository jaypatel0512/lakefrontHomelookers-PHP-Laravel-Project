<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PropertyController;
use App\Models\Property;
use App\Http\Controllers\email;

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
    return view('homepage');
});

Route::get('/properties/index', function () {
    return view('properties/index');
});

Route::resource('properties', PropertyController::class);
Route::get('homepage',[MainController::class, 'homepage']);


Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');

    Route::get('/admin/index',[MainController::class, 'index']);
    Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
    Route::get('/admin/properties',[MainController::class,'properties']);
    Route::get('/admin/profile',[MainController::class,'profile']);
    Route::get('/admin/blog',[MainController::class,'blog']);
    Route::get('/admin/aboutUs',[MainController::class, 'aboutUs']);
    Route::get('/admin/team',[MainController::class,'team']);
    Route::get('/admin/contactUs',[MainController::class, 'contactUs']);
    Route::get('/admin/faqs',[MainController::class, 'faqs']);
    Route::post('/admin/contactUs',[MainController::class, 'contactSubmit'])->name('contact.submit');
    Route::get('/', [email::class, 'index']);
});