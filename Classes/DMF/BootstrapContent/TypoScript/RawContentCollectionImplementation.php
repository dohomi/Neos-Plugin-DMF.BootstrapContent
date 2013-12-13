<?php
namespace DMF\BootstrapContent\TypoScript;

	/*                                                                        *
	 * This script belongs to the TYPO3 Flow package "TYPO3.Neos".            *
	 *                                                                        *
	 * It is free software; you can redistribute it and/or modify it under    *
	 * the terms of the GNU General Public License, either version 3 of the   *
	 * License, or (at your option) any later version.                        *
	 *                                                                        *
	 * The TYPO3 project - inspiring people to share!                         *
	 *                                                                        */

/**
 * TypoScript implementation to render ContentCollections. Will render needed
 * metadata for removed nodes.
 */
class RawContentCollectionImplementation extends \TYPO3\Neos\TypoScript\ContentCollectionImplementation {


	/**
	 * Render the list of nodes, and if there are none and we are not inside the live
	 * workspace, render a button to create new content.
	 *
	 * @return string
	 */
	public function evaluate() {
		//return parent::evaluate();
		return call_user_func(array(get_parent_class(get_parent_class($this)), 'evaluate'));
	}

}