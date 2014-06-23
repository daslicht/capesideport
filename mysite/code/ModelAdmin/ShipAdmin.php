<?php
class MyAdmin extends ModelAdmin {
	private static $managed_models = array('ShipPage', 'Producer', 'ShipType', 'ShippingCompany'); // Can manage multiple models
	private static $url_segment = 'ships'; // Linked as /admin/products/
	private static $menu_title = 'Ship Admin';
}