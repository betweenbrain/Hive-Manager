<?php defined('_JEXEC') or die;

/**
 * File       view.html.php
 * Created    8/28/14 1:36 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

/**
 * Class HivemanagerViewHive
 *
 * HTML View class for the Hive Manager Component
 *
 * @since  0.0.1
 */
class HivemanagerViewHive extends JViewLegacy
{

	/**
	 * @param   string $tpl The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{

		$this->form = $this->get('Form');

		parent::display($tpl);
	}
}
