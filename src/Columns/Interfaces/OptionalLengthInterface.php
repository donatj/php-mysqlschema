<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface OptionalLengthInterface {

	/**
	 * @return int|null The configured length, if any.
	 */
	public function getLength(): ?int;

	/**
	 * @param int|null $length The length, or null to omit it.
	 */
	public function setLength( ?int $length = null ): void;

}
