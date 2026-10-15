<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface RequiredLengthInterface {

	/**
	 * @return int The configured length.
	 */
	public function getLength(): int;

	/**
	 * @param int $length The required length.
	 */
	public function setLength( int $length ): void;

}
