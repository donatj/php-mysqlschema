<?php


namespace donatj\MySqlSchema\Columns\Numeric;

abstract class AbstractFractionColumn extends AbstractNumberColumn {

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
