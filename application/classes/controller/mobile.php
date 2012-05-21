<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mobile extends Controller_Application
{
	// Override the default application template for mobile devices
	public $template = 'layouts/mobile';

	public function action_nerd()
	{
		// Use a blue colour scheme
		View::set_global('mobile_theme','blue');
	}

	public function action_beauty()
	{
		// Use a pink colour scheme
		View::set_global('mobile_theme','pink');
	}

	public function action_register()
	{
		// Create a new person
		$person = ORM::factory('person');
		$person->values($_POST, array('sex', 'name', 'hair', 'boobs', 'shower', 'glasses'));

		// Build response
		$this->template->content->sex       = ($_POST['sex'] == Model_Person::SEX_NERD) ? ('nerd') : ('beauty');
		$this->template->content->other_sex = ($_POST['sex'] == Model_Person::SEX_NERD) ? ('beauty') : ('nerd');
		View::set_global('mobile_theme',($_POST['sex'] == Model_Person::SEX_NERD) ? ('blue') : ('pink'));

		try {
			$person->save();
		}
		catch (ORM_Validation_Exception $e) {
			$this->request->redirect(Route::url(($person->sex == Model_Person::SEX_NERD) ? ('nerd') : ('beauty')));
			return;
		}
	}
}