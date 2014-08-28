<?php defined('_JEXEC') or die;

/**
 * File       edit.php
 * Created    8/28/14 2:33 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */
?>
<form method="post" action="index.php">
	<?php foreach ($this->form->getFieldset() as $field): ?>
		<div class="control-group">
			<div class="control-label"><?php echo $field->label; ?></div>
			<div class="controls"><?php echo $field->input; ?></div>
		</div>
	<?php endforeach; ?>
	<input type="hidden" name="option" value="com_hivemanager" />
	<input type="hidden" name="task" value="hive.save" />
	<input type="hidden" name="view" value="hive" />
	<input type="hidden" name="layout" value="edit" />
	<input type="submit">
	<?php echo JHtml::_('form.token'); ?>
</form>