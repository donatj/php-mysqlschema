<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface MaxDigitsInterface {

	/**
	 * @return int
	 */
	public function getMaxDigits();

	/**
	 * @param int $maxDigits
	 * @return void
	 */
	public function setMaxDigits( $maxDigits );
}
