<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		return View::make('users.index');
	}

	public function showBlog()
	{
		return View::make('users.blog');
	}

	public function showAbout()
	{
		return View::make('users.about');
	}

	public function showComingsoon()
	{
		return View::make('users.comingsoon');
	}

	public function showSignup()
	{
		return View::make('users.signup');
	}

	public function showSignin()
	{
		return View::make('users.signin');
	}

	public function showBlogpost()
	{
		return View::make('users.blogpost');
	}

	public function showTour()
	{
		return View::make('users.tour');
	}

}
