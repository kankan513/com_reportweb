<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(true).'/components/com_reportweb/asset/css/font-awesome.min.css');


// Require helper file
JLoader::register('ReportWebHelper', JPATH_COMPONENT . '/helpers/reportweb.php');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('ReportWeb');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();