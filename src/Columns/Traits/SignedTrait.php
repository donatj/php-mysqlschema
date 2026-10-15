<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait SignedTrait {

	/** @var bool */
	protected $signed = false;

	/**
	 * @return bool Whether the numeric column is signed.
	 */
	public function isSigned(): bool {
		return $this->signed;
	}

	/**
	 * @param bool $signed Whether the numeric column is signed.
	 */
	public function setSigned( bool $signed ): void {
		$this->signed = $signed;
	}

}
