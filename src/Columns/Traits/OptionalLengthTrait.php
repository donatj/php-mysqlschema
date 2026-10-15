<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait OptionalLengthTrait {

	/** @var int|null */
	protected $length;

	/**
	 * @return int|null The configured length, if any.
	 */
	public function getLength(): ?int {
		return $this->length;
	}

	/**
	 * @param int|null $length The length, or null to omit it.
	 */
	public function setLength( ?int $length = null ): void {
		$this->length = $length;
	}

}
