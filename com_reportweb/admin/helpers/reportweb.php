<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * HelloWorld component helper.
 */
abstract class ReportWebHelper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(JText::_('Report Web'),
		                         'index.php?option=com_reportweb', $submenu == 'ReportWebs');
		JSubMenuHelper::addEntry(JText::_('Package Detail'),
		                         'index.php?option=com_reportweb&view=packagedetails', $submenu == 'PackageDetails');
		JSubMenuHelper::addEntry(JText::_('Package Detail Sub'),
		                         'index.php?option=com_reportweb&view=packagedetailsubs', $submenu == 'PackageDetailSubs');
		// set some global property
		/*$document = JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-reportweb ' .
		                               '{background-image: url(../media/com_reportweb/images/tux-48x48.png);}');
		if ($submenu == 'categories') 
		{
			$document->setTitle(JText::_('COM_REPORTWEB_ADMINISTRATION_CATEGORIES'));
		}*/
	}
}