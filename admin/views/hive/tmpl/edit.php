<?php defined('_JEXEC') or die;

/**
 * File       edit.php
 * Created    8/28/14 2:33 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
	Joomla.submitbutton = function (task) {
		if (task == 'hive.cancel' || document.formvalidator.isValid(document.id('hive-form'))) {
			Joomla.submitform(task, document.getElementById('hive-form'));
		}
	}
</script>
<form action="<?php echo JRoute::_('index.php?option=com_hivemanager'); ?>" method="post" name="adminForm" id="hive-form" class="form-validate">
	<div class="form-horizontal">
		<?php foreach ($this->form->getFieldset() as $field): ?>
			<div class="row-fluid">
				<div class="span1">
					<?php echo $field->label; ?>
				</div>
				<div class="span11">
					<?php echo $field->input; ?>
				</div>
			</div>
		<?php endforeach; ?>
		<input type="hidden" name="task" value="" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>