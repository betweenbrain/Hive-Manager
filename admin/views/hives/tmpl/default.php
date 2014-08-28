<?php defined('_JEXEC') or die;

/**
 * File       default.php
 * Created    8/28/14 4:08 PM 
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

foreach ($this->items as $item)
{
	echo '<pre>' . print_r($item, true) . '</pre>';
}
