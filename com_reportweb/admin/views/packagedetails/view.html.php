<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HelloWorlds View
 */
class ReportWebViewPackageDetails extends JViewLegacy
{
	/**
	 * HelloWorlds view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
 
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		ReportWebHelper::addSubmenu('PackageDetails');
		
		// Set the toolbar
		$this->addToolBar();
 
		// Display the template
		parent::display($tpl);
		
		// Set the document
		$this->setDocument();
	}
	/**
	 * Setting the toolbar
	 */
	protected function addToolBar($total=null) 
	{
		JToolBarHelper::title(JText::_('COM_REPORTWEB_MANAGER_PACKAGEDETAILS'));
		JToolBarHelper::addNew('packagedetail.add');
		JToolBarHelper::editList('packagedetail.edit');
		JToolBarHelper::deleteList('', 'packagedetails.delete');
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