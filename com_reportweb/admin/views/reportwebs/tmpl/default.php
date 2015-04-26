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
<form action="index.php?option=com_reportweb&view=reportwebs" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('#'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="5%">
				<?php echo JText::_('แพคเกจ') ;?>
			</th>
			<th width="20%">
				<?php echo JText::_('Website'); ?>
			</th>
			<th width="20%">
				<?php echo JText::_('MA Contact Expire'); ?>
			</th>
			<th width="20%">
				<?php echo JText::_('Domain Expire'); ?>
			</th>
			<th width="20%">
				<?php echo JText::_('Hosting Expire'); ?>
			</th>
      <th width="20%">
				<?php echo JText::_('Print'); ?>
			</th>
			<th width="2%">
				<?php echo JText::_('ID'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="8">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) : ?>
 
					<tr>
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
								<?php echo $row->name; ?>
						</td>
						<td>
								<?php echo $row->website_name; ?>
						</td>
						<td>
								<?php echo date("d-m-Y", strtotime($row->ma_contact_expire)); ?>
						</td>
						<td>
								<?php echo date("d-m-Y", strtotime($row->domain_expire)); ?>
						</td>
						<td>
								<?php echo date("d-m-Y", strtotime($row->hosting_expire)); ?>
						</td>
						<td align="center">
							<input type="button" onClick="window.location.href='index.php?option=com_reportweb&tmpl=component&print=1&layout=print&webid=<?php echo $row->id; ?>'" value="Print" />
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<?php echo JHtml::_('form.token'); ?>
</form>