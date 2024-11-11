<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface OptionalLengthInterface {

	/**
	 * @return int|null
	 */
	public function getLength();

	/**
	 * @param int|null $length
	 * @return void
	 */
	public function setLength( $length = null );
}
