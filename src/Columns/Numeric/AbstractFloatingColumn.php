<?php


namespace donatj\MySqlSchema\Columns\Numeric;

use donatj\MySqlSchema\Columns\Interfaces\PrecisionInterface;

abstract class AbstractFloatingColumn extends AbstractNumberColumn implements PrecisionInterface {
	/**
	 * @param string $name
	 * @param int    $precision
	 */
	public function __construct( $name, $precision ) {
		parent::__construct($name);
		$this->precision = $precision;
	}

	/**
	 * @var int
	 */
	protected $precision = 0;

	/**
	 * @return int
	 */
	public function getPrecision() {
		return $this->precision;
	}

	/**
	 * @param int $precision
	 * @return void
	 */
	public function setPrecision( $precision ) {
		$this->precision = $precision;
	}
}
