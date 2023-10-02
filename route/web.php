<?php
use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Group::middleware('M000')->members(function ()
{
Route::view('/', 'home');

Route::get('/home', 'HomeController@show');

Route::get('/bikes', 'BikesController@show');

Group::middleware('guest')->members(function ()
{
    //signup
    Route::view('/signup', 'auth/signup');
    Route::post('/signup', 'SignupController@create');

    //signin
    Route::view('/signin', 'auth/signin');
    Route::post('/signin', 'LoginController@authenticate');

    //forgotPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');
    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');
    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');
    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

Group::middleware('auth')->members(function ()
{
    Route::get('/dashborad', 'HomeController@showAdmin');
    
    // bikes
    Route::view('/new_bike', 'back/addBike');
    Route::post('/add_bike', 'BikesController@create');
    Route::get('/bikes', 'BikesController@show');

    Route::post('/search_bikes', 'BikesController@search');

    Route::get('/rent_bike/{bike_id}', 'BikesController@show');
    Route::post('/rent_bike', 'BikesController@Rent'); 

    Route::get('/edit_bike/{id}', 'BikesController@edit');
    Route::post('/bike_edit', 'BikesController@update'); 

    Route::get('/delete_bike/{id}', 'BikesController@delete');

    // Users
    Route::get('/customers', 'ProfileController@all');
    Route::get('/profile/{id?}', 'ProfileController@show'); 
    Route::post('/profile_update', 'ProfileController@update'); 

    // Bookings
    Route::get('/bookings/{id?}', 'BookingsController@show');
    Route::post('/booking_edit', 'BookingsController@update'); 

    // sign Out
    Route::get('/logout', 'LogoutController@logout');
    Route::post('/logout', 'LogoutController@logout');
});

Route::fallback(function (Response $response)
{
    return $response->withView('404');
});

});
