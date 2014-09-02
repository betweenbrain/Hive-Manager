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
		$this->item = $this->get('Item');

		$this->addToolbar();

		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolbar()
	{
		JFactory::getApplication()->input->set('hidemainmenu', true);

		$isNew = ($this->item->id == 0);

		JToolbarHelper::title($isNew ? JText::_('COM_HIVEMANAGER') . ': <em>' . JText::_('COM_HIVEMANAGER_NEW_HIVE') . '</em>'
									 : JText::_('COM_HIVEMANAGER') . ': <em>' . JText::_('COM_HIVEMANAGER_EDIT_HIVE') . '</em>'
		);
		JToolbarHelper::save('hive.save');
		JToolbarHelper::cancel('hive.cancel');
	}
}
