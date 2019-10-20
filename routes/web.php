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

    // Confirm Register
    Route::get('/registration', 'RegistrationController@index')->name('registration');
    Route::post('/registration', 'RegistrationController@store')->name('registration');
    
    // Profile
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile');
    
    // Get Characteristics
    Route::get('characteristics', 'CharacteristicsController@index')->name('characteristics');

    // Contas
    Route::post('property-account', 'AccountController@store')->name('property-account');
    Route::delete('property-account', 'AccountController@delete')->name('property-account');

    // Get colleges
    Route::get('colleges_autocomplete', 'CollegeController@search')->name('CollegeAutocomplete');
    
    // Get Course
    Route::get('course_autocomplete', 'CourseController@search')->name('CourseAutocomplete');

    
    Route::group(['middleware' => ['checkuser']], function () {

        // Image Property
        Route::post('property-image', 'ImageUploadController@store')->name('property-image');
        Route::delete('property-image', 'ImageUploadController@delete')->name('property-image');

        // Get Property
        Route::get('/properties', 'PropertyController@index')->name('properties');
        Route::get('/property/{id}/edit', 'PropertyController@edit')->name('property.edit');
        Route::get('/property/create', 'PropertyController@edit')->name('property.create');
        Route::post('/property/create', 'PropertyController@store')->name('property.create');
        Route::delete('/property', 'PropertyController@delete')->name('property.delete');
        Route::put('/property/{id}', 'PropertyController@update')->name('property');    

    });
});