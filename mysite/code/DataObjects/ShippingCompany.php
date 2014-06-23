<?php

class ShippingCompany extends DataObject{ 
	
	private static $db = [
		'Name' => 'Varchar'
	]; 

    private static $has_many = [
        'Ship' => 'ShipPage'
    ];

	private static $field_labels = array(
      'token' => 'ShippingCompany' 
    );

	static $searchable_fields = array(
      'Name'
   );

    private static $summary_fields = array(
      'Name'
   );

}

