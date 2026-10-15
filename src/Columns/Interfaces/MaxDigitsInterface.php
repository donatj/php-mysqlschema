<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface MaxDigitsInterface {

	/**
	 * @return int The total number of digits.
	 */
	public function getMaxDigits(): int;

	/**
	 * @param int $maxDigits The total number of digits.
	 */
	public function setMaxDigits( int $maxDigits ): void;

}
