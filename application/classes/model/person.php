<?php defined('SYSPATH') or die('No direct script access.');

class Model_Person extends ORM
{
	protected $_table_name = 'people';

	/*
	 * Define constants for encoding
	 */
	const SEX_BEAUTY = 0;
	const SEX_NERD   = 1;

	const HAIR_BLACK  = 0;
	const HAIR_BROWN  = 1;
	const HAIR_RED    = 2;
	const HAIR_BLONDE = 3;

	const BOOBS_AA  = 0;
	const BOOBS_A   = 1;
	const BOOBS_B   = 2;
	const BOOBS_C   = 3;
	const BOOBS_D   = 4;
	const BOOBS_DD  = 5;

	public static function find_best_match()
	{
		return DB::query(Database::SELECT, 'SELECT p1_id, p2_id, 
												1-(diff_shower+diff_glasses+diff_hair+diff_boobs)/4 AS `match`
												FROM matches
												ORDER BY `match`
												LIMIT 1')->execute();
	}

	public static function create_date()
	{
		// Find best match
		$row = Model_Person::find_best_match()->row();
		$person1 = Model_Person::factory($row['p1_id']);
		$person2 = Model_Person::factory($row['p2_id']);

		// Create date
		$person1->date = $person2->id;
		$person1->save();
		$person2->date = $person1->id;
		$person2->save();

		// Return data for the interface
		return $row;
	}
}