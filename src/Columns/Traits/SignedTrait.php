<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait SignedTrait {

	/** @var bool */
	protected $signed = false;

	/**
	 * @return bool
	 */
	public function isSigned() {
		return $this->signed;
	}

	/**
	 * @param bool $signed
	 */
	public function setSigned( $signed ) {
		$this->signed = $signed;
	}
}
