<?php namespace CodeFire\Access;

use \Auth;
use \Input;
use \Session;
use \Redirect;
use \View;

class AccessController extends \BaseController {
	
	/**
	 * Shows the login page.
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return View::make('forms.auth.login');
	}

	public function postLogin()
	{
		$user = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		if (Auth::attempt($user))
		{

			// Redirect to home page
		//	return Redirect::home();
			return Redirect::intended();
		}

		// Authentication failed, lets go back to login with all previous input
		return Redirect::to('login')->withInput();
	}

	public function getLogout()
	{
		Auth::logout();

		return Redirect::home();
	}

}
