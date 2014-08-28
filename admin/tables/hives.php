<?php defined('_JEXEC') or die;

/**
 * File       hives.php
 * Created    8/28/14 1:43 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */
class HivemanagerTableHives extends JTable
{
	var $id = null;
	var $name = null;
	var $type = null;
	var $lat = null;
	var $lng = null;
	var $size = null;
	var $started = '0000-00-00';

	function __construct(&$db)
	{
		parent::__construct('#__hivemanager_hives', 'id', $db);
	}
}
