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
												ORDER BY `match` DESC
												LIMIT 1')->execute();
	}

	public static function create_date()
	{
		// Find best match
		$row = Model_Person::find_best_match()->current();
		$person1 = ORM::factory('person', $row['p1_id']);
		$person2 = ORM::factory('person', $row['p2_id']);

		// Create date
		$person1->date = $person2->id;
		$person1->save();
		$person2->date = $person1->id;
		$person2->save();

		// Return data for the interface
		return array(
				'person1'=> $person1,
				'person2'=> $person2,
				'match' => $row['match']
				);
	}

	public static function count_singles()
	{
		$row = DB::query(Database::SELECT, 'SELECT COUNT(*) AS "count" FROM people WHERE date IS NULL')->execute()->current();
		return $row['count'];
	}

	public static function count_dates()
	{
		$row = DB::query(Database::SELECT, 'SELECT COUNT(*) AS "count" FROM people WHERE date IS NOT NULL')->execute()->current();
		return $row['count']/2;
	}

	public static function count_single_nerds()
	{
		$row = DB::query(Database::SELECT, 'SELECT COUNT(*) AS "count" 
												FROM people 
												WHERE date IS NULL 
												AND sex = '.Model_Person::SEX_NERD)->execute()->current();
		return $row['count'];
	}

	public static function count_single_beauties()
	{
		$row = DB::query(Database::SELECT, 'SELECT COUNT(*) AS "count" 
												FROM people 
												WHERE date IS NULL 
												AND sex = '.Model_Person::SEX_BEAUTY)->execute()->current();
		return $row['count'];
	}
}