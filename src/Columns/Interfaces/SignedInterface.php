<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface SignedInterface {

	/**
	 * @return bool Whether the numeric column is signed.
	 */
	public function isSigned(): bool;

	/**
	 * @param bool $signed Whether the numeric column is signed.
	 */
	public function setSigned( bool $signed ): void;

}
