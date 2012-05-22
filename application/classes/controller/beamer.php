<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Beamer extends Controller_Application
{
	public function action_index()
	{
	}

	public function action_count_singles()
	{
		echo Model_Person::count_singles();
		exit;
	}

	public function action_count_dates()
	{
		echo Model_Person::count_dates();
		exit;
	}

	public function action_count_single_nerds()
	{
		echo Model_Person::count_single_nerds();
		exit;
	}

	public function action_count_single_beauties()
	{
		echo Model_Person::count_single_beauties();
		exit;
	}

	public function action_start_date()
	{
		$date = Model_Person::create_date();
		$front = array();
		$front[] = $date['match'];
		exit;
	}
}