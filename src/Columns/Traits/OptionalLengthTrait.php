<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait OptionalLengthTrait {

	/**
	 * @var int|null
	 */
	protected $length;

	/**
	 * @return int|null
	 */
	public function getLength() : ?int {
		return $this->length;
	}

	/**
	 * @param int|null $length
	 */
	public function setLength( ?int $length = null ) : void {
		$this->length = $length;
	}
}
