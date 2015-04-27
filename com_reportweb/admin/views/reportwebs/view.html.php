<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base( true ).'/components/com_reportweb/asset/css/reportwebs.css');
/**
 * HelloWorlds View
 */
class ReportWebViewReportWebs extends JViewLegacy
{
	/**
	 * HelloWorlds view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
		$webid = JRequest::getVar('webid');
		if(!$webid){
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
 
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		ReportWebHelper::addSubmenu('ReportWebs');
		
		// Set the toolbar
		$this->addToolBar();
 
		// Display the template
		parent::display($tpl);
		
		// Set the document
		$this->setDocument();
		}
		else{
			$this->prints		= $this->get('print');
			$this->maindetail		= $this->get('maindetail');
			
			parent::display($tpl);
		}
	}
	/**
	 * Setting the toolbar
	 */
	protected function addToolBar($total=null) 
	{
		JToolBarHelper::title(JText::_('COM_REPORTWEB_MANAGER_REPORTWEBS'));
		JToolBarHelper::addNew('reportweb.add');
		JToolBarHelper::editList('reportweb.edit');
		JToolBarHelper::deleteList('', 'reportwebs.delete');
		JToolBarHelper::custom('reportwebs.prints', 'print', 'printer', 'Print', false);
	}
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_REPORTWEB_ADMINISTRATION'));
	}
}