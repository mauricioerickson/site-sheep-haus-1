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
    Route::get('/profile', 'ProfileController@edit')->name('profile');
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

    //Match
    Route::post('match', 'MacthController@store')->name('match');
    
    Route::group(['middleware' => ['checkproperty']], function () {

        // Habitos Imoveis
        Route::post('i_habit', 'IHabitsController@store')->name('i_habit.store');
        Route::delete('i_habit', 'IHabitsController@destroy')->name('i_habit.destroy');

        // Image Property
        Route::post('property-image', 'ImageUploadController@store')->name('property-image');
        Route::delete('property-image', 'ImageUploadController@delete')->name('property-image');

        // Get Property
        Route::get('/properties', 'PropertyController@index')->name('properties');
        Route::get('/property/{id}/edit', 'PropertyController@edit')->name('property.edit');
        Route::get('/property/create', 'PropertyController@create')->name('property.create');
        Route::post('/property/create', 'PropertyController@store')->name('property.store');
        Route::delete('/property', 'PropertyController@destroy')->name('property.destroy');
        Route::put('/property/{id}', 'PropertyController@update')->name('property.update');    

    });

    Route::group(['middleware' => ['checkdweller']], function () {

        // Habitos Imoveis
        Route::post('m_habit', 'MHabitsController@store')->name('m_habit.store');
        Route::delete('m_habit', 'MHabitsController@destroy')->name('m_habit.destroy');

        Route::get('suggested_properties', 'SuggestedPropertiesController@index')->name('SeggestedProperties');

    });

});