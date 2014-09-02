<?php defined('_JEXEC') or die;

/**
 * File       hive.php
 * Created    8/28/14 3:22 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

// import Joomla controlleradmin library
jimport('joomla.application.component.controlleradmin');

/**
 * HelloWorlds Controller
 */
class HivemanagerControllerHives extends JControllerAdmin
{

	/**
	 * Proxy for getModel.
	 *
	 * @since       2.5
	 */
	public function getModel($name = 'Hive', $prefix = 'HivemanagerModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));

		return $model;
	}

}
