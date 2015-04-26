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
	
	public function getprint()
	{
		$webid = JRequest::getVar('webid');		
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select($db->quoteName(array('a.id', 'c.name', 'a.website_name', 'a.ma_contact_expire', 'a.domain_expire', 'a.hosting_expire')));
		$query->from($db->quoteName('#__wms_information', 'a'));
		$query->join('LEFT', $db->quoteName('#__package', 'b') .'ON ('. $db->quoteName('a.package_id').' = '.$db->quoteName('b.id').')');
		$query->join('LEFT', $db->quoteName('#__package_name', 'c') .'ON ('. $db->quoteName('b.package_name_id').' = '.$db->quoteName('c.id').')');
		$query->where($db->quoteName('a.id') . ' = '. $db->quote($webid));		
		$db->setQuery($query);
		$row = $db->loadObjectList();
		
		return $row;
	}
	
	public function getmaindetail()
	{
		$webid = JRequest::getVar('webid');		
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select($db->quoteName(array('a.id', 'a.name')));
		$query->from($db->quoteName('#__package_detail', 'a'));
		$query->join('LEFT', $db->quoteName('#__package', 'b') .'ON ('. $db->quoteName('a.id').' = '.$db->quoteName('b.package_detail_id').')');
		$query->join('LEFT', $db->quoteName('#__wms_information', 'c') .'ON ('. $db->quoteName('b.package_name_id').' = '.$db->quoteName('c.package_id').')');
		$query->where($db->quoteName('c.id') . ' = '. $db->quote($webid));		
		$query->group($db->quoteName('b.package_detail_id'));
		$db->setQuery($query);
		$row = $db->loadObjectList();
		$data['main'] = $row;
		
		foreach($row as $val){
			$db    = JFactory::getDbo();
			$query = $db->getQuery(true);
			
			$query->select($db->quoteName(array('a.id', 'a.name', 'c.package_package', 'c.package_practical', 'c.package_remark')));
			$query->from($db->quoteName('#__package_detail_sub', 'a'));
			$query->join('LEFT', $db->quoteName('#__package_detail', 'b') .'ON ('. $db->quoteName('a.package_detail_id').' = '.$db->quoteName('b.id').')');
			$query->join('LEFT', $db->quoteName('#__package', 'c') .'ON ('. $db->quoteName('a.id').' = '.$db->quoteName('c.package_detail_sub_id').')');
			$query->where($db->quoteName('c.package_detail_sub_id') . ' = '. $db->quote($val->id));	
			$db->setQuery($query);
			$row2 = $db->loadObjectList();
			$data['sub'][] = $row2;			
		}
		
		return $data;
	}
}