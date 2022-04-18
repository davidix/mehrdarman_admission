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
	 * Method to run batch operations.
	 *
	 * @param   object  $model  The model.
	 *
	 * @return  boolean   True if successful, false otherwise and internal error is set.
	 *
	 * @since   2.5
	 */
	public function batch($model = null)
	{
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

		// Set the model
		$model = $this->getModel('Admission', 'Mehrdarman_admissionModel', array());

		// Preset the redirect
		$this->setRedirect(JRoute::_('index.php?option=com_mehrdarman_admission&view=admissions' . $this->getRedirectToListAppend(), false));

		return parent::batch($model);
	}
}
?>