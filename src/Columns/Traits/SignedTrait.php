<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait SignedTrait {

	/**
	 * @var bool
	 */
	protected $signed = false;

	/**
	 * @return boolean
	 */
	public function isSigned() {
		return $this->signed;
	}

	/**
	 * @param boolean $signed
	 */
	public function setSigned( $signed ) {
		$this->signed = $signed;
	}
}
