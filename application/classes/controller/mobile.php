<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mobile extends Controller_Application
{
	// Override the default application template for mobile devices
	public $template = 'layouts/mobile';

	public function action_nerd()
	{
		// Use a blue colour scheme
		View::set_global('mobile_theme','b');
	}

	public function action_beauty()
	{
		// Use a pink colour scheme
		View::set_global('mobile_theme','a');
	}

	public function action_register()
	{
		// Create a new person
		$person = ORM::factory('person');
		$person->values($this->input(), array(''));
		try {
			$person->save();
			$this->template->content = View::factory($person->type.'.register');
		}
		catch (ORM_Validation_Exception $e) {
			$this->request->redirect(Route::url('beauty'));
		}
		// Submit new content-page
	}
}