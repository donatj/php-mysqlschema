<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait RequiredLengthTrait {

	/** @var int */
	protected $length = 0;

	/**
	 * @return int The configured length.
	 */
	public function getLength(): int {
		return $this->length;
	}

	/**
	 * @param int $length The required length.
	 */
	public function setLength( int $length ): void {
		$this->length = $length;
	}

}
