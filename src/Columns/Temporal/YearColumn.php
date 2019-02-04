<?php

namespace donatj\MySqlSchema\Columns\Temporal;

use donatj\MySqlSchema\Columns\Interfaces\RequiredLengthInterface;
use donatj\MySqlSchema\Columns\Traits\RequiredLengthTrait;

class YearColumn extends AbstractTemporalColumn implements RequiredLengthInterface {

	use RequiredLengthTrait;

	/**
	 * @param string $name
	 * @param int    $length 2 or 4
	 */
	public function __construct( string $name, int $length = 4 ) {
		parent::__construct($name);
		$this->setLength($length);
	}

	/**
	 * @param int $length 2 or 4
	 */
	public function setLength( int $length ) : void {
		if( $length != 2 && $length != 4 ) {
			throw new \InvalidArgumentException("invalid length '{$length}' - year can only be of length 2 or 4");
		}

		$this->length = $length;
	}

	/**
	 * @return string
	 */
	public function getTypeName() : string {
		return 'year';
	}
}
