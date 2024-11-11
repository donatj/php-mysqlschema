<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface PrecisionInterface {

	/**
	 * @return int
	 */
	public function getPrecision();

	/**
	 * @param int $precision
	 * @return void
	 */
	public function setPrecision( $precision );

}
