<?php

class UsersController extends HomeController {

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

	public function showLanding()
	{
		return View::make('users.landing');
	}

	public function showBlog()
	{
		return View::make('users.blog');
	}

	public function showAbout()
	{
		return View::make('users.about');
	}

  public function linkedInAuthorize()
  {
    return OAuth::authorize('linkedin');
  }

  public function linkedInLogin()
  {
      try {
          OAuth::login('linkedin');
      } catch (ApplicationRejectedException $e) {
          // User rejected application
      } catch (InvalidAuthorizationCodeException $e) {
          // Authorization was attempted with invalid
          // code,likely forgery attempt
      }

      // Current user is now available via Auth facade
      $user = Auth::user();
      return Redirect::intended();
  }

}
