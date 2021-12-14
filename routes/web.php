<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Models\Property;
use App\Models\Role;
use App\Models\Blog;
use App\Models\Home;
use App\Http\Controllers\FaqsController;
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
Route::resource('faqs', FaqsController::class);
Route::resource('appointment', AppointmentController::class);
Route::resource('roles', RoleController::class);
Route::resource('blogs', BlogController::class);
Route::resource('home', HomeController::class);



Route::get('homepage',[MainController::class, 'homepage']);
Route::resource('/admin/calculate',CalculateController::class);

Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');

    Route::get('/admin/index',[MainController::class, 'index']);
    Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
    Route::get('/admin/properties',[MainController::class,'properties']);
    Route::get('/admin/propertiesDetail',[MainController::class,'propertiesDetail']);
    Route::get('/admin/profile',[MainController::class,'profile']);
    Route::get('/admin/blogs',[MainController::class,'blogs']);
    Route::get('/admin/aboutUs',[MainController::class, 'aboutUs']);
    Route::get('/admin/team',[MainController::class,'team']);
    Route::get('/admin/contactUs',[MainController::class, 'contactUs']);
    Route::get('/admin/faqs',[MainController::class, 'faqs']);
    Route::get('/admin/roles',[MainController::class, 'roles']);
    Route::post('/admin/contactUs',[MainController::class, 'contactSubmit'])->name('contact.submit');
    // Route::get('/', [email::class, 'index']);
});


