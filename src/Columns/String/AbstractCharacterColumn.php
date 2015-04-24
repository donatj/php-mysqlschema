<?php

namespace donatj\MySqlSchema\Columns\String;

abstract class AbstractCharacterColumn extends AbstractStringColumn {

	/**
	 * @param string $name
	 * @param int    $length
	 */
	function __construct( $name, $length ) {
		parent::__construct($name);
		$this->setLength($length);
	}
}
