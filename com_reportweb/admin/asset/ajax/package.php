<?php
define( '_JEXEC', 1); //  This will allow to access file outside of joomla.
define( 'DS', DIRECTORY_SEPARATOR );
define( 'JPATH_BASE', '../../../../../' );
require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );

$mainframe =& JFactory::getApplication('site');
$mainframe->initialise();

$package = JRequest::getVar('package');

$db = JFactory::getDbo();
$query = $db->getQuery(true);
$query->select($db->quoteName(array('id', 'name')));
$query->from($db->quoteName('#__package_detail_sub'));
$query->where($db->quoteName('package_detail_id') . ' = '. $db->quote($package));
$query->order('id ASC');
$db->setQuery($query);
$results = $db->loadObjectList();

$i=0;
foreach($results as $val){
	$total->row[$i]['id'] = $val->id;
	$total->row[$i]['name'] = $val->name;
	$i++;
}

echo json_encode($total);

?>