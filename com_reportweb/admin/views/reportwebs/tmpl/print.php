<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<h4 style="text-align:center;">Web Maintenance Service Monthly Report</h4>
<?php foreach($this->prints as $val):?>
<table border="1" width="80%" cellpadding="5" cellspacing="3" align="center">
	<tr>
		<td colspan="6" bgcolor="#00CCFF"><h5>Information</h5></td>
	</tr>
	<tr>
		<td align="center">Website Name</td>
		<td colspan="2" align="center"><?php echo $val->website_name;?></td>
		<td align="center">Package Type</td>
		<td colspan="2" align="center"><?php echo $val->name;?></td>
	</tr>
	<tr>
		<td align="center">MA Contact Expire</td>
		<td align="center"><?php echo date("d M Y",strtotime($val->ma_contact_expire));?></td>
		<td align="center">Domain Expire</td>
		<td align="center"><?php echo date("d M Y",strtotime($val->domain_expire));?></td>
		<td align="center">Hosting Expire</td>
		<td align="center"><?php echo date("d M Y",strtotime($val->hosting_expire));?></td>
	</tr>
</table>
<?php endforeach;?>
<br>
<table border="1" width="80%" cellpadding="5" cellspacing="3" align="center">
	<tr>
		<td bgcolor="#00CCFF" width="60%" align="center"><h5>Package Detail</h5></td>
		<td bgcolor="#00CCFF" width="10%" align="center"><h5>Package</h5></td>
		<td bgcolor="#00CCFF" width="10%" align="center"><h5>Practical</h5></td>
		<td bgcolor="#00CCFF" width="20%" align="center"><h5>Remark</h5></td>
	</tr>
</table>
