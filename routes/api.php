<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/userx', function (Request $request) {
    return 123;
});

// Route::middleware('auth:sanctum')->get('/listingz', 'ListingController@all_listings');

Route::post('/register', 'ApiAuthController@register');

Route::post('/login', 'ApiAuthController@login');

Route::post('/logout', 'ApiAuthController@logout');

Route::get('/all_listingz', 'ListingController@all_listings')->middleware('auth:sanctum');
