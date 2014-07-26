<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// 404
App::missing(function($exception) {return Redirect::to('404');});
Route::get('404', function() {return View::make('errors.404');});

// HOME - redirect to explore for now
Route::get('/', function() {
    return View::make('home');
});

//EXPLORE
Route::get(
    'explore/category',
    array('uses' => 'ExploreController@category'),
    array('as' => 'exploreCategory')
);
Route::get(
    'explore/product',
    array('uses' => 'ExploreController@allProducts'),
    array('as' => 'exploreAllProducts')
);
Route::get(
    'explore/product/{productId}',
    array('uses' => 'ExploreController@product'),
    array('as' => 'exploreProduct')
);
Route::get(
    'explore/category/{categoryId}',
    array('uses' => 'ExploreController@Micro'),
    array('as' => 'exploreMicro')
);
Route::get(
    'explore/category/{categoryId}/micro/{microId}',
    array('uses' => 'ExploreController@MicroProducts'),
    array('as' => 'exploreMicroProducts')
);

// ABOUT
Route::get(
    'about',
    array('uses' => 'HomeController@about'),
    array('as' => 'about')
);

//LOGIN
Route::get(
    'login',
    array('uses' => 'HomeController@showLogin'),
    array('as' => 'showLogin')
);
Route::post(
    'login',
    array('uses' => 'HomeController@doLogin'),
    array('as' => 'doLogin')
);