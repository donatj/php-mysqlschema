<?php


namespace donatj\MySqlSchema\Columns\Numeric;

abstract class AbstractFractionColumn extends AbstractNumberColumn {
	/**
	 * @param string $name
	 * @param int    $decimals
	 */
	public function __construct( $name, $decimals ) {
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
	public function getDecimals() {
		return $this->decimals;
	}

	/**
	 * @param int $decimals
	 */
	public function setDecimals( $decimals ) {
		$this->decimals = $decimals;
	}
}
