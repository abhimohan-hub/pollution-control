<?php
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

// Admin Login routes

Route::get('/admin/login','adminLoginController@adminLogin')->name('admin.login');
Route::post('/admin/login/submit','adminLoginController@submit')->name('admin.login.submit');

Route::get('/admin/logout','adminLoginController@logout')->name('admin.logout');
Route::get('/admin/dashboard', 'pocoController@dashboard')->name('admin.dashboard');

Route::get('/admin', 'pocoController@adminFrontend')->name('admin.frontend');
Route::get('/user', 'pocoController@userLoginDashboard')->name('user.frontend.login');

Illuminate\Support\Facades\Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/loggedin', 'pocoController@userLoggedinDashboard')->name('user.frontend.loggedin');
