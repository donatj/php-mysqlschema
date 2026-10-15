<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface DecimalPlacesInterface {

	/**
	 * @return int The number of digits after the decimal point.
	 */
	public function getDecimalPlaces(): int;

	/**
	 * @param int $decimalPlaces The number of digits after the decimal point.
	 */
	public function setDecimalPlaces( int $decimalPlaces ): void;

}
