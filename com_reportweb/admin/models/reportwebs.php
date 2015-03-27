<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * HelloWorldList Model
 */
class ReportWebModelReportWebs extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return	string	An SQL query
	 */
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select($db->quoteName(array('a.id', 'c.name', 'a.website_name', 'a.ma_contact_expire', 'a.domain_expire', 'a.hosting_expire')));
		$query->from($db->quoteName('#__wms_information', 'a'));
		$query->join('LEFT', $db->quoteName('#__package', 'b') .'ON ('. $db->quoteName('a.package_id').' = '.$db->quoteName('b.id').')');
		$query->join('LEFT', $db->quoteName('#__package_name', 'c') .'ON ('. $db->quoteName('b.package_name_id').' = '.$db->quoteName('c.id').')');
 
		return $query;
	}
}