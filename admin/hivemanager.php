<?php defined('_JEXEC') or die;

/**
 * File       hivemanager.php
 * Created    8/28/14 1:10 PM 
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

// Get an instance of the controller prefixed by Registration
$controller = JControllerLegacy::getInstance('Hivemanager');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();