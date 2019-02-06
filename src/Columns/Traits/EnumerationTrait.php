<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait EnumerationTrait {

	/** @var string[] */
	protected $enumeration = [];

	/**
	 * @param string[] $values
	 */
	public function setEnumeratedValues( array $values ) : void {
		$this->enumeration = $values;
	}

	/**
	 * @return string[]
	 */
	public function getEnumeratedValues() : array {
		return $this->enumeration;
	}

}
