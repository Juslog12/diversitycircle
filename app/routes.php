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

Route::get('/', 'HomeController@showIndex');

Route::get('/blog', 'HomeController@showBlog');

Route::get('/blogpost', 'HomeController@showBlogPost');

Route::get('/signup', 'HomeController@showSignup');

Route::get('/corporate-signup', 'HomeController@showCorporateSignup');

Route::get('/signin', 'HomeController@showSignin');

Route::get('/comingsoon', 'HomeController@showComingsoon');

Route::get('/tour', 'HomeController@showTour');
