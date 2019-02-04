<?php

namespace donatj\MySqlSchema\Columns\Numeric;

abstract class AbstractFractionColumn extends AbstractNumberColumn {

	/**
	 * @param string $name
	 * @param int    $decimals
	 */
	public function __construct( string $name, int $decimals ) {
		parent::__construct($name);
		$this->decimals = $decimals;
	}

	/**
	 * @var int
	 */
	protected $decimals = 0;

	/**
	 * @return int
	 */
	public function getDecimals() : int {
		return $this->decimals;
	}

	/**
	 * @param int $decimals
	 */
	public function setDecimals( int $decimals ) : void {
		$this->decimals = $decimals;
	}
}
