<?php

use App\Http\Controllers\SeminarController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/', 'PageController@index')->name('home');
Route::get('/home', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/membership', 'PageController@membership')->name('membership')->middleware('auth');

Route::get('/topup', 'PageController@topupform')->name('topup')->middleware('auth');
Route::put('/topup/{user}', 'PageController@topupbalance')->name('topupbalance')->middleware('auth');
Route::resource('seminar', 'SeminarController');
Route::get('/category/{id}','SeminarController@category');
Route::get('/detail/{id}', 'SeminarController@detail');

//membership
//admin
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login')->middleware('guest');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit')->middleware('guest');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout.submit');
    Route::get('/dashboard', 'AdminsController@index')->name('admin.dashboard')->middleware('auth:admin');
    Route::post('/approve/{seminarId}', 'AdminsController@approveSeminar')->name('approve')->middleware('auth:admin'); 
});

//user
Route::group(['middleware' => ['auth','isUser']], function () {
    Route::get('/user', 'PageController@index');
    Route::get('/enroll/{seminarId}', 'PageController@enrollSeminar')->name('enroll.seminar'); 
    Route::get('/edit/{userId}', 'PageController@EditProfile')->name('edit.profile'); 
    Route::put('/update/{userId}', 'PageController@UpdateProfile')->name('update.profile');
    Route::get('/myaccount', 'PageController@myaccount')->name('myaccount')->middleware('auth');
    //membership
    Route::put('/membership/basic/{user}', 'MembershipController@membershipBuyBasic')->name('buymembershipBasic')->middleware('auth');
    Route::put('/membership/premium/{user}', 'MembershipController@membershipBuyPremium')->name('buymembershipPremium')->middleware('auth');
    Route::put('/membership/cancel/{user}', 'MembershipController@cancelMembership')->name('cancelMembership')->middleware('auth');

});

//penyelenggara
Route::group(['middleware' => ['auth','isPenyelenggara']], function () {
    Route::get('/penyelenggara', 'PageController@index');
    Route::get('/seminar/create', 'SeminarController@create');
    Route::post('/seminar/store', 'SeminarController@store');
    Route::get('/seminar/registeredlists/{userId}', 'SeminarController@showRegisteredSeminarList'); 
    Route::get('/participant/{Seminarid}', 'SeminarController@participant'); 
});