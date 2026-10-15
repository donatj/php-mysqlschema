<?php

namespace donatj\MySqlSchema\Columns\Numeric;

use donatj\MySqlSchema\Columns\Interfaces\PrecisionInterface;

abstract class AbstractFloatingColumn extends AbstractNumberColumn implements PrecisionInterface {

	/**
	 * @param string $name      The SQL column name.
	 * @param int    $precision The floating-point precision.
	 */
	public function __construct( string $name, int $precision ) {
		parent::__construct($name);

		$this->precision = $precision;
	}

	/** @var int */
	protected $precision = 0;

	/**
	 * @return int The floating-point precision.
	 */
	public function getPrecision(): int {
		return $this->precision;
	}

	/**
	 * @param int $precision The floating-point precision.
	 * @return void
	 */
	public function setPrecision( int $precision ): void {
		$this->precision = $precision;
	}

}
