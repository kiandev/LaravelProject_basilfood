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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/typefour', 'TypeFourController');
Route::resource('/food', 'FoodController');
Route::resource('/pizza', 'PizzaController');
Route::resource('/kebab', 'KebabController');
Route::resource('/salad', 'SaladController');
Route::resource('/news', 'NewsController');
Route::resource('/info', 'BasilController');
Route::resource('/team', 'TeamController');
Route::resource('/four', 'FourController');
Route::resource('/category', 'CategoryController');
Route::resource('/notification', 'NotificationController');
Route::resource('/message', 'MessageController');
Route::post('/foodcategory', 'FoodCategoryController@index');
