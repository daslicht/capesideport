<?php

class ShipType extends DataObject{ 
	
  	private static $db = [
  		'Token' => 'Varchar',
  		'ShipType' => 'Varchar'
  	]; 

    private static $has_many = [
        'Ship' => 'ShipPage'
    ];

    static $searchable_fields = array(
      'Token',
      'ShipType'
   );

    private static $summary_fields = array(
      'Token',
      'ShipType'
      // leaves out the 'ProductCode' field, removing the column
   );

}