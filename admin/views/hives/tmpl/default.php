<?php defined('_JEXEC') or die;

/**
 * File       default.php
 * Created    8/28/14 4:08 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */
?>

<form action="<?php echo JRoute::_('index.php?option=com_hivemanager'); ?>" method="post" name="adminForm" id="adminForm">
	<div id="j-main-container">
		<table class="table table-striped" id="hives-list">
			<thead>
			<tr>
				<th width="1%" class="nowrap center">
					<?php echo JHtml::_('grid.checkall'); ?>
				</th>
				<th width="1%" class="nowrap center">
					<?php echo JText::_('COM_HIVEMANAGER_ID'); ?>
				</th>
				<th class="nowrap">
					<?php echo JText::_('COM_HIVEMANAGER_NAME'); ?>
				</th>
				<th class="nowrap">
					<?php echo JText::_('COM_HIVEMANAGER_TYPE'); ?>
				</th>
				<th class="nowrap">
					<?php echo JText::_('COM_HIVEMANAGER_LAT'); ?>
				</th>
				<th class="nowrap">
					<?php echo JText::_('COM_HIVEMANAGER_LNG'); ?>
				</th>
				<th class="nowrap">
					<?php echo JText::_('COM_HIVEMANAGER_SIZE'); ?>
				</th>
				<th class="nowrap">
					<?php echo JText::_('COM_HIVEMANAGER_STARTED'); ?>
				</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($this->hives as $i => $hive) :
				$checkedIn = $hive->checked_out == 0 || $hive->checked_out == $this->userId;
				?>
				<tr class="row<?php echo $i % 2; ?>">
					<td class="center">
						<?php if ($checkedIn)
						{
							echo JHtml::_('grid.id', $i, $hive->id);
						}
						?>
					</td>
					<td class="center">
						<?php echo $hive->id; ?>
					</td>
					<td>
						<?php if ($checkedIn) : ?>
						<a href="<?php echo JRoute::_('index.php?option=com_hivemanager&task=hive.edit&id=' . $hive->id); ?>">
						<?php endif ?>
						<?php echo $hive->name; ?>
						<?php if ($checkedIn) : ?>
						</a>
					<?php endif ?>
					</td>
					<td>
						<?php echo $hive->type; ?>
					</td>
					<td>
						<?php echo $hive->lat; ?>
					</td>
					<td>
						<?php echo $hive->lng; ?>
					</td>
					<td>
						<?php echo $hive->size; ?>
					</td>
					<td>
						<?php echo $hive->started; ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
