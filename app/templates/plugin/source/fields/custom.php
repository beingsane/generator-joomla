<?php
/**
 * @copyright
 */

defined('_JEXEC') or die;

/**
 * Class JFormFieldCustom
 */
class JFormFieldCustom extends JFormField
{
	/**
	 * @var string
	 */
	protected $type = 'Custom';

	/**
	 * Method to get the field input markup.
	 *
	 * @return  string  The field input markup.
	 *
	 * @since   11.1
	 */
	protected function getInput()
	{
		return '';
	}

}