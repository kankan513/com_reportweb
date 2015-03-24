<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * HelloWorldList Model
 */
class ReportWebModelPackageDetailSubs extends JModelList
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
		$query->select($db->quoteName(array('a.id', 'a.name', 'b.name'),array('id', 'name', 'package_name')));
		$query->from($db->quoteName('#__package_detail_sub', 'a'));
		$query->join('LEFT', $db->quoteName('#__package_detail', 'b').'ON ('. $db->quoteName('a.package_detail_id'). ' = '. $db->quoteName('b.id').')' );
 
		return $query;
	}
}