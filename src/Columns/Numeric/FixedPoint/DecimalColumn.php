<?php

namespace donatj\MySqlSchema\Columns\Numeric\FixedPoint;

use donatj\MySqlSchema\Columns\Interfaces\DecimalPlacesInterface;
use donatj\MySqlSchema\Columns\Interfaces\MaxDigitsInterface;
use donatj\MySqlSchema\Columns\Numeric\AbstractNumberColumn;

class DecimalColumn extends AbstractNumberColumn implements MaxDigitsInterface, DecimalPlacesInterface {

	/**
	 * @var int
	 */
	protected $maxDigits;

	/**
	 * @var int
	 */
	protected $decimalPlaces;

	/**
	 * @param string $name
	 * @param int    $maxDigits
	 * @param int    $decimalPlaces
	 */
	public function __construct( $name, $maxDigits, $decimalPlaces ) {
		parent::__construct($name);
		$this->maxDigits = $maxDigits;
		$this->decimalPlaces = $decimalPlaces;
	}

	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'decimal';
	}

	/**
	 * @return int
	 */
	public function getMaxDigits() {
		return $this->maxDigits;
	}

	/**
	 * @param int $maxDigits
	 * @return void
	 */
	public function setMaxDigits( $maxDigits ) {
		$this->maxDigits = $maxDigits;
	}

	/**
	 * @return int
	 */
	public function getDecimalPlaces() {
		return $this->decimalPlaces;
	}

	/**
	 * @param int $decimalPlaces
	 * @return void
	 */
	public function setDecimalPlaces( $decimalPlaces ) {
		$this->decimalPlaces = $decimalPlaces;
	}
}
