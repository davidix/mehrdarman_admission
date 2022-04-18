<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

/**
 * Admission item controller class.
 *
 * @package     Mehrdarman_admission
 * @subpackage  Controllers
 */
class Mehrdarman_admissionControllerAdmission extends JControllerForm
{
	/**
	 * The URL view item variable.
	 *
	 * @var    string
	 * @since  12.2
	 */
	protected $view_item = 'admission';

	/**
	 * The URL view list variable.
	 *
	 * @var    string
	 * @since  12.2
	 */
	protected $view_list = 'admissions';
	
	/**
	 * Increment the hit counter for the newsfeed.
	 *
	 * @param   int  $pk  Optional primary key of the item to increment.
	 *
	 * @return  boolean  True if successful; false otherwise and internal error set.
	 *
	 * @since   3.0
	 */
	public function hit($pk = 0)
	{
		$input = JFactory::getApplication()->input;
		$hitcount = $input->getInt('hitcount', 1);

		if ($hitcount)
		{
			$pk = (!empty($pk)) ? $pk : (int) $this->getState('newsfeed.id');
			$db = $this->getDbo();

			$db->setQuery(
				'UPDATE #__newsfeeds' .
				' SET hits = hits + 1' .
				' WHERE id = '.(int) $pk
			);

			try
			{
				$db->execute();
			}
			catch (RuntimeException $e)
			{
				$this->setError($e->getMessage());
				return false;
			}
		}

		return true;
	}
}
?>