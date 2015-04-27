<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait RequiredLengthTrait {

	/**
	 * @var int
	 */
	protected $length = 0;

	/**
	 * @return int
	 */
	public function getLength() {
		return $this->length;
	}

	/**
	 * @param int $length
	 */
	public function setLength( $length ) {
		$this->length = $length;
	}
}
