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
<form action="index.php?option=com_reportweb&view=packages" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('#'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="5%">
				<?php echo JText::_('Package Type') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('Package Detail') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('Package Detail Sub') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('Package') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('Practical') ;?>
			</th>
			<th width="30%">
				<?php echo JText::_('Remark') ;?>
			</th>
			<th width="2%">
				<?php echo JText::_('ID'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="9">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) : ?>
 
					<tr>
						<td align="center"><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
								<?php echo $row->package_name; ?>
						</td>
						<td>
								<?php echo $row->package_detail; ?>
						</td>
						<td>
								<?php echo $row->package_detail_sub; ?>
						</td>
						<td align="center">
								<?php 
								if($row->package_package === "-1"){
									echo '<i class="fa fa-check" style="color:green;"></i>';
								}
								else{
									echo $row->package_package;
								}
								?>
						</td>
						<td align="center">
							<?php 
								if($row->package_practical === "-1"){
									echo '<i class="fa fa-check" style="color:green;"></i>';
								}
								else{
									echo $row->package_practical;
								}
								?>
						</td>
						<td>
								<?php echo $row->remark; ?>
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