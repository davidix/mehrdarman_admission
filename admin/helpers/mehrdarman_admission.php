<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

/**
 * Mehrdarman_admission helper class.
 *
 * @package     Mehrdarman_admission
 * @subpackage  Helpers
 */
class Mehrdarman_admissionHelper
{
	public static function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_MEHRDARMAN_ADMISSION_SUBMENU_MEHRDARMAN_ADMISSION_ADMISSION'), 
			'index.php?option=com_mehrdarman_admission&view=admissions', 
			$vName == 'admissions'
		);

	}
	
	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @return	JObject
	 * @since	1.6
	 */
	public static function getActions()
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		$assetName = 'com_mehrdarman_admission';

		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
		);

		foreach ($actions as $action) {
			$result->set($action, $user->authorise($action, $assetName));
		}

		return $result;
	}
	

}