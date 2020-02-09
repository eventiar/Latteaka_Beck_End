<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->group(['middleware' => 'auth.jwt'], function ($api) {
        $api->DELETE('/logout', 'App\Http\Controllers\AuthController@logout');
        $api->GET('/me', 'App\Http\Controllers\AuthController@show');
    });
    $api->POST('/register', 'App\Http\Controllers\AuthController@register');
    $api->POST('/login', 'App\Http\Controllers\AuthController@login');
    //subscriber
    Route::POST('/subscriber/create', 'subscriberController@createsubscriber');
    Route::GET('/subscriber/show','subscriberController@showallsubscriber');
    
    //menu
    Route::post('/menu/create', 'menuController@createmenu');
    Route::get('/menu/all', 'menuController@showallmenu');
    Route::get('/menu/{id}', 'menuController@showdetailmenu');
    Route::put('menu/edit/{id}','menuController@updatemenu');
    Route::delete('menu/delete/{id}','menuController@deletemenu');
});
