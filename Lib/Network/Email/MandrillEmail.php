<?php
App::uses('CakeEmail', 'Network/Email');

class MandrillEmail extends CakeEmail {

	/**
	 * Template for the view
	 *
	 * @var string
	 */
	protected $_mandrillTemplate = '';

	/**
	 * Get/Set Subject.
	 *
	 * @param string $mandrilTemplate Mandrill Template string.
	 * @return string|$this
	 */
	public function mandrillTemplate($mandrillTemplate = null) {
		if ($mandrillTemplate === null) {
			return $this->_mandrillTemplate;
		}
		$this->_mandrillTemplate = $mandrillTemplate;
		return $this;
	}


}