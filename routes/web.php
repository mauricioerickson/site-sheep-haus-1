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

Auth::routes();

// Login By Google, Facebook
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'registration']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
    Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

    // Confirm Register
    Route::get('/registration', 'RegistrationController@index')->name('registration');
    Route::post('/registration', 'RegistrationController@store')->name('registration');

    // Get Course
    Route::get('course_autocomplete', 'CourseController@search')->name('CourseAutocomplete');

    // Get colleges
    Route::get('colleges_autocomplete', 'CollegeController@search')->name('CollegeAutocomplete');

    // Get Property
    Route::get('property/{id?}', 'PropertyController@index')->name('property');
    Route::post('property', 'PropertyController@store')->name('property');
    Route::put('property/{id?}', 'PropertyController@update')->name('property');

    // Get Characteristics
    Route::get('characteristics', 'CharacteristicsController@index')->name('characteristics');

    // Profile
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile');
});
