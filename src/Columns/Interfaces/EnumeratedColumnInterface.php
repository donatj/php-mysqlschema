<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface EnumeratedColumnInterface {

	/**
	 * @param string[] $values
	 */
	public function setEnumeratedValues( array $values ) : void;

	/**
	 * @return string[]
	 */
	public function getEnumeratedValues() : array;
}
