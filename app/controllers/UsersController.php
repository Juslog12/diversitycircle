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
      OAuth::login('linkedin', function($user, $details){
        $user->linkedin_id = $details->userId;
        $user->name = $details->firstName . ' ' . $details->lastName;
        $user->email = $details->email;
        $user->profile_image = $details->imageUrl;
        $user->save();
      });
    } catch (ApplicationRejectedException $e) {
      // User rejected application
    } catch (InvalidAuthorizationCodeException $e) {
      // Authorization was attempted with invalid
      // code,likely forgery attempt
    }

    // Current user is now available via Auth facade
    $user = Auth::user();

    Session::flash('message', 'You have successfully registered');
    return Redirect::to('/comingsoon');
  }

  public function registerUser() {

    $validator = Validator::make(Input::all(), User::$rules);

    if($validator->passes()) {
      $user = new User;
      $user->email = Input::get('email');
      $user->password = Input::get('password');
      $user->save();

      Session::flash('message', 'You have successfully registered');
      return Redirect::to('/comingsoon');

    } else {

      Session::flash('message', 'Please fix the errors below.');

      return Redirect::to('/signup')
        ->withErrors($validator)
        ->withInput();

    }

  }

}
