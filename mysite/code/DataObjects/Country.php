<?php

class Country extends DataObject{ 
	
	private static $db = [
		'Name' => 'Varchar', 
		'token' => 'Varchar'
	]; 

	private static $has_one = [
		'Image' => 'Image'
	];

	private static $has_many = [
        'Ship' => 'ShipPage'
    ];

}