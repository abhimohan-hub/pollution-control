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

// For user
Route::post('/update/profile', 'pocoController@upload')->name('update.profile');
Route::get('/change/profile', 'pocoController@changeProfile')->name('change.profile');

Route::get('/', function () {
    return view('welcome');
});

// Admin Login routes

Route::get('/admin/login','adminLoginController@adminLogin')->name('admin.login');
Route::post('/admin/login/submit','adminLoginController@submit')->name('admin.login.submit');

Route::post('/admin/logout','adminLoginController@adminLogout')->name('admin.logout');
Route::get('/admin', 'pocoController@adminDashboard')->name('admin.dashboard');

Illuminate\Support\Facades\Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// For Newsletter
Route::post('/sendmail', 'mailController@sendmail')->name('send.mail');


