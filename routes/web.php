<?php

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

Route::get('', 'Profile@showUserForWelcome')->name('welcome');

Route::get('/properties', 'Properties@list');
Route::get('/properties/{id}', 'Properties@singleProperty');
Route::post('/properties/{id}/book', 'Booking@bookingRequest');

Route::get('/requests', 'Profile@showRequestInfo')->name('requests')->middleware('auth');

Route::get('/profile/properties', 'Profile@showRequestsAndProperties')->name('myProperties')->middleware('auth');

Route::post('/profile/properties/approve', 'Profile@acceptRequest')->middleware('auth');
Route::post('/profile/properties/reject', 'Profile@rejectRequest')->middleware('auth');

Route::get('/profile/properties/create', 'CreateProperties@showProperties')->middleware('auth');
Route::post('/profile/properties/create', 'CreateProperties@createProperty')->name('create')->middleware('auth');

Route::get('/profile/properties/{id}', 'Profile@showUserPropertyInfo')->name('userProp')->middleware('auth');
Route::post('/profile/properties/{id}/delete', 'Profile@deleteProperty')->middleware('auth');

Route::post('/profile/properties/{id}/edit', 'Profile@editProperty')->middleware('auth');
Route::get('/profile/properties/{id}/edit', 'Profile@showUserPropertyInfoForEdit')->name('edit')->middleware('auth');

Route::get('/profile', 'Profile@showUserInfo')->name('userProfile')->middleware('auth');
Route::post('/profile', 'Profile@editUserData')->middleware('auth');
Route::post('/profile/updatePassword', 'Profile@editUserPassword')->middleware('auth');