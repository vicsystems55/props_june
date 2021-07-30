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





Auth::routes();

Route::get('/choose', 'ChooseRoleController@index')->name('choose');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

//'middleware' => ['auth','agents'],

Route::group(['middleware' => ['auth', 'agents'],  'prefix' => 'agents'], function(){

    Route::get('/', 'AgentsPageController@home')->name('agents.home');

    Route::get('/messages', 'AgentsPageController@messages')->name('agents.messages');

    Route::get('/create_listing', 'AgentsPageController@create_listing')->name('agents.create_listing');

    Route::get('/create_listing2', 'AgentsPageController@create_listing2')->name('agents.create_listing2');

    Route::get('/create_listing3', 'AgentsPageController@create_listing3')->name('agents.create_listing3');

    Route::get('/create_listing4', 'AgentsPageController@create_listing4')->name('agents.create_listing4');

    Route::get('/create_listing5', 'AgentsPageController@create_listing5')->name('agents.create_listing5');

    Route::get('/my_listings', 'AgentsPageController@my_listings')->name('agents.my_listings');

    Route::get('/published_listings', 'AgentsPageController@published_listings')->name('agents.published_listings');

    Route::get('/unpublished_listings', 'AgentsPageController@unpublished_listings')->name('agents.unpublished_listings');

    Route::get('/trashed_listings', 'AgentsPageController@trashed_listings')->name('agents.trashed_listings');

    Route::get('/my_favourites', 'AgentsPageController@my_favourites')->name('agents.my_favourites');

    Route::get('/reviews', 'AgentsPageController@reviews')->name('agents.reviews');

    Route::get('/my_reviews', 'AgentsPageController@my_reviews')->name('agents.my_reviews');

    Route::get('/visitors_reviews', 'AgentsPageController@visitors_reviews')->name('agents.visitors_reviews');

    Route::get('/my_plan', 'AgentsPageController@my_plan')->name('agents.my_plan');

    Route::get('/my_profile', 'AgentsPageController@my_profile')->name('agents.my_profile');



});


Route::group(['middleware' => ['auth', 'admin'],  'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@home')->name('admin.home');

    Route::get('/members', 'AdminPageController@members')->name('admin.members');

    Route::get('/member', 'AdminPageController@member')->name('admin.member');

    Route::get('/listings', 'AdminPageController@listings')->name('admin.listings');

    Route::get('/listing', 'AdminPageController@listing')->name('admin.listing');

});


Route::get('/', 'HomePageController@index')->name('home');

Route::get('/about', 'HomePageController@about')->name('about');

Route::get('/contact', 'HomePageController@contact')->name('contact');

Route::get('/blog', 'HomePageController@blog')->name('blog');

Route::get('/listings', 'HomePageController@all_listings')->name('all_listings');

Route::get('/listing', 'HomePageController@single_listing')->name('single_listing');

Route::get('/blog', 'HomePageController@blog')->name('blog');

Route::get('/subscription_plans', 'HomePageController@subscription_plans')->name('subscription_plans');

Route::get('/search_results', 'HomePageController@search_results')->name('search_results');


Route::get('/get_images', 'ListingImageController@get_images')->name('get_images');

Route::post('/upload_image', 'ListingImageController@upload_image')->name('upload_image');

Route::post('/remove_image', 'ListingImageController@remove_image')->name('remove_image');



Route::get('/get_plans', 'ListingFloorPlanController@get_plans')->name('get_plans');

Route::post('/upload_plan', 'ListingFloorPlanController@upload_plan')->name('upload_plan');

Route::post('/remove_plan', 'ListingFloorPlanController@remove_plan')->name('remove_plan');



Route::get('/get_categories', 'ListingController@get_categories')->name('get_categories');

Route::post('/get_type', 'ListingController@get_type')->name('get_type');

Route::post('/get_subtype', 'ListingController@get_subtype')->name('get_subtype');

Route::post('/create_listing_step1', 'ListingController@create_listing_step1')->name('create_listing_step1');

Route::get('/edit_listing/{listing_code}', 'ListingController@edit_listing')->name('edit_listing');

Route::post('/create_listing_step2', 'ListingController@create_listing_step2')->name('create_listing_step2');


Route::post('/final_publish', 'ListingController@final_publish')->name('final_publish');

Route::get('/publish_success', 'ListingController@publish_success')->name('publish_success');



