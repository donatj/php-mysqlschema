<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface OptionalLengthInterface {

	/**
	 * @return int|null
	 */
	public function getLength() : ?int;

	/**
	 * @param int|null $length
	 */
	public function setLength( ?int $length = null ) : void;
}
