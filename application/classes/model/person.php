<?php defined('SYSPATH') or die('No direct script access.');

class Model_Person extends ORM
{
	protected $_table_name = 'people';

	/*
	 * Define structs for encoding
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
}