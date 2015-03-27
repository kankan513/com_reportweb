<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.form.formfield');
 
// The class name must always be the same as the filename (in camel case)
class JFormFieldPackage extends JFormField {
 
	//The field class must know its own type through the variable $type.
	protected $type = 'Package';
 
	public function getLabel() {
		// code that returns HTML that will be shown as the label
	}
 
	public function getInput() {
		// code that returns HTML that will be shown as the form field
	}
}