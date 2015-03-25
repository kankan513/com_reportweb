<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HelloWorld View
 */
class ReportWebViewPackageName extends JViewLegacy
{
	/**
	 * View form
	 *
	 * @var		form
	 */
	protected $form = null;
 
	/**
	 * display method of Hello view
	 * @return void
	 */
	public function display($tpl = null) 
	{
		// get the Data
		$form = $this->get('Form');
		$item = $this->get('Item');
 
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Assign the Data
		$this->form = $form;
		$this->item = $item;
 
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
	protected function addToolBar() 
	{
		$input = JFactory::getApplication()->input;
		$input->set('hidemainmenu', true);
		$isNew = ($this->item->id == 0);
 
		if ($isNew)
		{
			$title = JText::_('สร้างชื่อแพคเกจ');
		}
		else
		{
			$title = JText::_('แก้ไขชื่อแพคเกจ');
		}
 
		JToolBarHelper::title($title, 'packagename');
		JToolBarHelper::save('packagename.save');
		JToolBarHelper::cancel(
			'packagename.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$isNew = ($this->item->id < 1);
		$document = JFactory::getDocument();
		$document->setTitle($isNew ? JText::_('สร้างชื่อแพคเกจ')
		                           : JText::_('แก้ไขชื่อแพคเกจ'));
	}
}