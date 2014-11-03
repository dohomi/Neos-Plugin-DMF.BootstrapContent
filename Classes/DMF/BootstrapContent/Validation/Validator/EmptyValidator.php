<?php
namespace DMF\BootstrapContent\Validation\Validator;

/*                                                                        *
 * This script belongs to the TYPO3 Flow framework.                       *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Validation\Validator\AbstractValidator;

/**
 * Validator for not empty values.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class EmptyValidator extends AbstractValidator {

    /**
     * This validator always needs to be executed even if the given value is empty.
     * See AbstractValidator::validate()
     *
     * @var boolean
     */
    protected $acceptsEmptyValues = TRUE;

    /**
     * Checks if the given value is not empty (NULL, empty string, empty array
     * or empty object that implements the Countable interface).
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($value) {
        if($value !== '' || $value !== FALSE) {
            $this->addError('This property must remain empty.', 1122334455);
        }
    }
}
