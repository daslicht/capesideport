<?php

class Country extends DataObject{ 
	
	private static $db = [
		'Token' => 'Varchar',
		'Name' => 'Varchar'

	]; 

	// private static $has_one = [
	// 	'Image' => 'Image'
	// ];

	private static $has_many = [
	    'Ship' => 'ShipPage'
	];

}