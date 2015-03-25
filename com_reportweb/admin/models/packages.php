<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * HelloWorldList Model
 */
class ReportWebModelPackages extends JModelList
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
		$query->select($db->quoteName(array('a.id', 'b.name', 'c.name', 'd.name', 'a.package_package', 'a.package_practical'),array('id', 'package_name', 'package_detail', 'package_detail_sub', 'package_package', 'package_practical')));
		$query->from($db->quoteName('#__package', 'a'));
		$query->join('LEFT', $db->quoteName('#__package_name', 'b').'ON ('. $db->quoteName('a.package_name_id'). ' = '. $db->quoteName('b.id').')' );
		$query->join('LEFT', $db->quoteName('#__package_detail', 'c').'ON ('. $db->quoteName('a.package_detail_id'). ' = '. $db->quoteName('c.id').')' );
		$query->join('LEFT', $db->quoteName('#__package_detail_sub', 'd').'ON ('. $db->quoteName('a.package_detail_sub_id'). ' = '. $db->quoteName('d.id').')' );
 
		return $query;
	}
}