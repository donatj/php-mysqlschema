<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface RequiredLengthInterface {

	/**
	 * @return int
	 */
	public function getLength();

	/**
	 * @param int $length
	 */
	public function setLength( $length );
}
