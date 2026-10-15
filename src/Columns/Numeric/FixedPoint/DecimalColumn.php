<?php

namespace donatj\MySqlSchema\Columns\Numeric\FixedPoint;

use donatj\MySqlSchema\Columns\Interfaces\DecimalPlacesInterface;
use donatj\MySqlSchema\Columns\Interfaces\MaxDigitsInterface;
use donatj\MySqlSchema\Columns\Numeric\AbstractNumberColumn;

class DecimalColumn extends AbstractNumberColumn implements MaxDigitsInterface, DecimalPlacesInterface {

	/** @var int */
	protected $maxDigits;

	/** @var int */
	protected $decimalPlaces;

	/**
	 * @param string $name          The SQL column name.
	 * @param int    $maxDigits     The total number of digits.
	 * @param int    $decimalPlaces The number of digits after the decimal point.
	 */
	public function __construct( string $name, int $maxDigits, int $decimalPlaces ) {
		parent::__construct($name);

		$this->maxDigits = $maxDigits;
		$this->decimalPlaces = $decimalPlaces;
	}

	public function getTypeName(): string {
		return 'decimal';
	}

	/**
	 * @return int The total number of digits.
	 */
	public function getMaxDigits(): int {
		return $this->maxDigits;
	}

	/**
	 * @param int $maxDigits The total number of digits.
	 * @return void
	 */
	public function setMaxDigits( int $maxDigits ): void {
		$this->maxDigits = $maxDigits;
	}

	/**
	 * @return int The number of digits after the decimal point.
	 */
	public function getDecimalPlaces(): int {
		return $this->decimalPlaces;
	}

	/**
	 * @param int $decimalPlaces The number of digits after the decimal point.
	 * @return void
	 */
	public function setDecimalPlaces( int $decimalPlaces ): void {
		$this->decimalPlaces = $decimalPlaces;
	}

}
