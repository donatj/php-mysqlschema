<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface DecimalPlacesInterface {

	/**
	 * @return int
	 */
	public function getDecimalPlaces();

	/**
	 * @param int $decimalPlaces
	 * @return void
	 */
	public function setDecimalPlaces( $decimalPlaces );
}
