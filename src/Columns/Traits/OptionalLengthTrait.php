<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait OptionalLengthTrait {

	/**
	 * @var int|null
	 */
	protected $length = null;

	/**
	 * @return int|null
	 */
	public function getLength() {
		return $this->length;
	}

	/**
	 * @param int|null $length
	 */
	public function setLength( $length = null ) {
		$this->length = $length;
	}
}
