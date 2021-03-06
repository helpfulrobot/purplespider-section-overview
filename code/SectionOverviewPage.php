<?php
class SectionOverviewPage extends Page {
	
	static $singular_name = "Section Overview";
	static $description = 'Shows the Title, Summary & Links for all subpages';		
 
	static $icon = "section-overview/images/text_list_bullets";
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Main", $editor = new HTMLEditorField('Content', 'Intro Text'),"Metadata");
		$editor->setRows(20);
		return $fields;
	}
	 
}

class SectionOverviewPage_Controller extends Page_Controller {

	
}