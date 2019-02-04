<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface RequiredLengthInterface {

	/**
	 * @return int
	 */
	public function getLength() : int;

	/**
	 * @param int $length
	 */
	public function setLength( int $length ) : void;
}
