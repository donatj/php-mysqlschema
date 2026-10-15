<?php

namespace donatj\MySqlSchema\Columns\String;

use donatj\MySqlSchema\Columns\Interfaces\RequiredLengthInterface;
use donatj\MySqlSchema\Columns\Traits\RequiredLengthTrait;

abstract class AbstractCharacterColumn extends AbstractStringColumn implements RequiredLengthInterface {

	use RequiredLengthTrait;

	/**
	 * @param string $name   The SQL column name.
	 * @param int    $length The column length.
	 */
	public function __construct( string $name, int $length ) {
		parent::__construct($name);

		$this->setLength($length);
	}

}
