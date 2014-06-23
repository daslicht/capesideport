<?php
class ShipPage extends Page {
    
    private static $db = [
         'ArticleNumber' => 'Varchar',
         'Country' => 'Varchar'
    ];

    private static $has_many = [
        'Images' => 'ShipImage'
    ];

    private static $has_one = [
        'Producer' => 'Producer',
        'ShipType' => 'ShipType',
        'ShippingCompany' => 'ShippingCompany'
    ];

   //  static $searchable_fields = array(
   //    'Producer'
   // );

   //  private static $summary_fields = array(
   //    'Producer'
   //    // leaves out the 'ProductCode' field, removing the column
   // );



    // public function onBeforeWrite() {

    //     // if ( $this->isChanged('Title')  || $this->isChanged('ArtikelNummer') || $this->isChanged('HerstellerID') ){

    //     //     $this->URLSegment = $this->generateURLSegment('test');
    //     // }

    // }
     
    public function getCMSFields() {

        $fields = parent::getCMSFields();
        
        $conf = GridFieldConfig_RecordEditor::create(10);
        $conf->addComponent(new GridFieldGalleryTheme('Image'));
        $conf->addComponent(new GridFieldBulkUpload());
        $conf->getComponentByType('GridFieldBulkUpload')->setConfig('folderName', $this->getRootFolderName());
        $fields->addFieldToTab("Root.Gallery", Gridfield::create('Gallery', 'Gallery', $this->Images(), $conf));         

        $field = new DropdownField('ProducerID', 'Producer', Producer::get()->map('ID', 'Title'));
        $field->setEmptyString('- Producer -');
        $fields->addFieldToTab('Root.Main', $field, 'Content');
        
        $field = new DropdownField('ShippingCompanyID', 'Shipping Company', ShippingCompany::get()->map('ID', 'Name'));
        $field->setEmptyString('- Shipping Company -');
        $fields->addFieldToTab('Root.Main', $field, 'Content');     
        
        $field = new CountryDropdownField('Country','Country');
        $field->setEmptyString('- Country -');
        $fields->addFieldToTab('Root.Main', $field, 'Content');
        
        $field = new TextField('ArticleNumber','ArticleNumber');
        $fields->addFieldToTab('Root.Main', $field, 'Content');


        // $config = GridFieldConfig_RelationEditor::create(); 
        // $config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(  
        //     'Name' => 'Name',
        //     'Producer.Title'=> 'Producer' 
        // )); 

        // $producersField = new GridField(
        //     'Producer', 
        //     'Producer', 
        //     $this->Producer(), 
        //     $config
        // );     
        // $fields->addFieldToTab('Root.Producers', $producersField); 


        return $fields;
    }
}
 
class ShipPage_Controller extends Page_Controller {
    public function init() 
    { 
        parent::init(); 
        Requirements::css("assets/iView/css/styles.css");
        Requirements::css("assets/iView/css/iview.css");
        Requirements::css("assets/iView/css/skin 1/style.css");
        
        Requirements::set_force_js_to_bottom(true);
        Requirements::javascript("assets/iView/js/jquery.easing.js");       
        Requirements::javascript("assets/iView/js/raphael-min.js");     
        Requirements::javascript("assets/iView/js/iview.js");
        Requirements::javascript("assets/ShipPage.js");


    }
   


}





