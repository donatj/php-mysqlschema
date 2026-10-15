<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface PrecisionInterface {

	/**
	 * @return int The floating-point precision.
	 */
	public function getPrecision(): int;

	/**
	 * @param int $precision The floating-point precision.
	 */
	public function setPrecision( int $precision ): void;

}
